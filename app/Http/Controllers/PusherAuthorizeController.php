<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pusher\Pusher;

class PusherAuthorizeController extends Controller
{
    public function channelAuthorize(Request $request)
    {
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
        echo $pusher->socket_auth(

            $request->input('channel_name'),

            $request->input('socket_id')

        );

    }
}
