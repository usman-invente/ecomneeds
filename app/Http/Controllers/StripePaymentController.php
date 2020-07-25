<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use App\Order;
use App\Transaction;
use App\Mail\OrderEmail;
use App\Mail\AdminEmail;
use Mail;
use App\Notifications\OrderNotification;
use Bitfumes\Multiauth\Model\Admin;
use App\User;
use Pusher\Pusher;

class StripePaymentController extends Controller
{
    public function order(Request $request)
    {

        $payment =  $request->session()->get('ordersum');
        $sender_name = Auth()->user()->name;
        $sender_email = Auth()->user()->email;
        $description = "Payment from " . $sender_name;

        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $charge = Stripe\Charge::create([
                "amount" => $payment * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $description,

            ]);
            $data = $request->session()->get('order');   //getting order data from session
            $images = session('usman');            //getting order images from session
            $reference_images = $request->session()->get('reference_images'); //getting reference images from session
            
            //store order data into db
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->order_id = session('order_id');
            $order->instruction = json_encode($data['instruction'],JSON_UNESCAPED_SLASHES);
            $order->level = json_encode($data['level'],JSON_UNESCAPED_SLASHES);
            $order->clipping = json_encode($data['clipping'],JSON_UNESCAPED_SLASHES);
            $order->masking = json_encode($data['masking'],JSON_UNESCAPED_SLASHES);
            $order->montage = json_encode($data['montage'],JSON_UNESCAPED_SLASHES);
            $order->shadow = json_encode($data['shadow'],JSON_UNESCAPED_SLASHES);
            $order->resize = json_encode($data['resize'],JSON_UNESCAPED_SLASHES);
            $order->return_format = json_encode($data['returnformat'],JSON_UNESCAPED_SLASHES);
            $order->comments = $data['comments'];
            $order->images = json_encode($images, JSON_UNESCAPED_SLASHES);
            $order->reference_images = json_encode($reference_images, JSON_UNESCAPED_SLASHES);
            $order->save();

            $transaction  = new Transaction;
            $transaction->transaction_id = $charge->id;
            $transaction->currency = $charge->currency;
            $transaction->amount = $charge->amount;
            $transaction->status = $charge->status;
            $transaction->save();

            //sending  order email to user


            $details = array(
                'title' => 'Mail Demo from ItSolutionStuff.com',
                'name' => $sender_name,
                'email' => $sender_email,
                'payment' => $payment,
                'orderid' => session('order_id'),
                'src' => asset('public/images/award_order.png')
            );

            // Database notification to admin
            $admin = Admin::find(1);
            $admin->notify(new OrderNotification($details));


            //order email to user

            Mail::to($sender_email)->send(new OrderEmail($details));

            //order email to admin

            Mail::to('usman.traximtech@gmail.com')->send(new AdminEmail($details));

            $pusher_data = array(
                'orderid' => session('order_id'),
                'name' => $sender_name,
                'src' => asset('public/images/award_order.png'),

            );

            $options = array(
                'cluster' => 'ap2',
                'encrypted' => true
            );

            $pusher = new Pusher(
                env('PUSHER_APP_KEY', ''),
                env('PUSHER_APP_SECRET', ''),
                env('PUSHER_APP_ID', ''),
                $options

            );


            $pusher->trigger('private-Bitfumes.Multiauth.Model.Admin.' . $admin->id . '', 'Illuminate\Notifications\Events\BroadcastNotificationCreated', $pusher_data);

            //remove session
            $request->session()->forget('ordersum');
            $request->session()->forget('order');
            $request->session()->forget('usman');
            $order_id = mt_rand();
            $request->session()->put('order_id', $order_id);
            Session::flash('success', 'Payment successful!');
            return redirect()->route('showorders');

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }


    }
}
