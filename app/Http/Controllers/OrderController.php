<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Auth;
use File;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createOrder()
    {

        return view('user.dashboard.order.createorder');
    }

    public function saveOrder(Request $request)
    {
        // return $request->all();
        $prize_arr = array();
        $data = array(

            'instruction' => $request->instruction,
            'level' => $request->level,
            'clipping'=> $request->clipping,
            'masking' => $request->masking,
            'shadow' => $request->shadow,
            'montage' => $request->montage,
            'resize' => $request->resize,
            'returnformat' => $request->returnformat,
            'psdwithlayer' => $request->psdwithlayer,
            'comments' => $request->comments,

        );
      
        if (!empty($request->level)) {
            foreach ($request->level as $level) {
                
                array_push($prize_arr, $level);
            }
        }
        if (!empty($request->clipping)) {
            foreach ($request->clipping as $clipping) {
                
                array_push($prize_arr, $clipping);
            }
        }
        if (!empty($request->masking)) {
            foreach ($request->masking as $masking) {

                array_push($prize_arr, $masking);
            }
        }

        if (!empty($request->shadow)) {
            foreach ($request->shadow as $shadow) {

                array_push($prize_arr, $shadow);
            }
        }

        if (!empty($request->montage)) {
            foreach ($request->montage as $montage) {

                array_push($prize_arr, $montage);
            }
        }

        if (!empty($request->resize)) {
            foreach ($request->resize as $resize) {

                array_push($prize_arr, $resize);
            }
        }

        $sum = array_sum($prize_arr);
       
        
        if ($request->hasfile('reference_file')) {
            $order_id = $request->session()->get('order_id');
            foreach ($request->file('reference_file') as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $folderPath = public_path('orders/orderid' . '_' . $order_id . '/' . 'reference');
                $file->move($folderPath, $name);
                $reference_images[] = session('order_id') . '/' . 'reference' . '/' . $name;
            }
        } else {
            $reference_images = '';
        }

        $request->session()->put('order', $data);
        $request->session()->put('reference_images', $reference_images);
        $request->session()->put('ordersum', $sum);
        //$value = $request->session()->get('order');

        //print_r($value);

        return redirect()->route('order_summary');

    }

    public function orderSummary(Request $request)
    {
        $order_data = $request->session()->get('order');
        $date = date('d-m-Y');
        $order_id = session('order_id');
        $data = $request->session()->get('order');
        return view('user.dashboard.order.order_summary')->with('date', $date)
            ->with('orderid', $order_id)
            ->with('level', $order_data['level'])
            ->with('masking', $order_data)
            ->with('ordersum', $request->session()->get('ordersum'));
    }

    public function payment()
    {
        return view('user.dashboard.order.payment');
    }

    public function storefilepath(Request $request)
    {
        $image_array = array();
        $order_id = $request->session()->get('order_id');
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $folderPath = public_path('orders/orderid' . '_' . $order_id);

        if (!is_dir($folderPath)) {
            mkdir($folderPath);

        }
        $image->move($folderPath, $imageName);
        array_push($image_array, $imageName);
        print_r($image_array);
    }

    public function previewImages()
    {
        $order_id = session('order_id');
        $path = public_path('orders/orderid' . '_' . $order_id);
        //$files = scandir($path);
        if (is_dir($path)) {
            $files = array_diff(scandir($path), array('..', '.'));
            if (!empty($files)) {

                $images_path = array_map(array($this, "cancatenatePath"), $files);
                session(['usman' => $images_path]);
                return view('user.dashboard.order.preview_images', compact('files'));
            } else {
                Session::flash('file-error', 'Please Upload atleast one file');
                return view('user.dashboard.order.createorder');
            }

        } else {
            Session::flash('file-error', 'Please Upload atleast one file');
            return view('user.dashboard.order.createorder');
        }

    }

    public function cancatenatePath($x)
    {
        return session('order_id') . '/' . $x;
    }

    public function showorderss()
    {
//        $arr = array();
        //        $orders = User::find(Auth::user()->id)->orders;
        //        $data_arr = json_decode($orders, true);

        return view('user.dashboard.order.showorders');

    }

    public function showorders_ajax(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'order_id',
            2 => 'status',
            3 => 'level',
            4 => 'images',
            5 => 'created_at',

        );

        $totalData = Order::where('user_id', Auth::user()->id)->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $orders = Order::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {
            $search = $request->input('search.value');

            $orders = Order::where('order_id', $search)
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhereRaw('DATE_FORMAT(`created_at`, "%d-%m-%Y") LIKE ? ', [$search . '%'])
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = Order::where('order_id', $search)
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhereRaw('DATE_FORMAT(`created_at`, "%d-%m-%Y") LIKE ? ', [$search . '%'])
                ->count();
        }

        $data = array();
        if (!empty($orders)) {
            $sum = 0;
            //getting order ammount and showin table
            foreach ($orders as $order) {
                $ammount = json_decode($order->level, true);
                foreach ($ammount as $amt) {
                    $sum = $sum + $amt;
                }

                //getting images count
                $order_images = count(json_decode($order->images, true));

                $nestedData['id'] = $order->id;
                $nestedData['order_id'] = $order->order_id;
                if ($order->status == 'pending') {
                    $nestedData['status'] = "<span class='badge badge-danger right'>{$order->status}</span>";
                } else {
                    $nestedData['status'] = "<span class='badge badge-success right'>{$order->status}</span>";
                }
                $nestedData['level'] = '$' . number_format($sum, 2);
                $nestedData['images'] = $order_images;
                $nestedData['created_at'] = date('d-m-Y ', strtotime($order->created_at));

                $data[] = $nestedData;

            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data,
        );

        echo json_encode($json_data);

    }

    public function deleteImage(Request $request)
    {
        $filename = $request->get('filename');
        $order_id = session('order_id');
        $folderPath = public_path('orders/orderid' . '_' . $order_id . '/' . $filename);
        if (file_exists($folderPath)) {
            unlink($folderPath);
        }
        return $filename;

    }
}