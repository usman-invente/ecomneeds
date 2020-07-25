<?php

use Illuminate\Support\Facades\Broadcast;
use Bitfumes\Multiauth\Model\Admin;


/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('Bitfumes.Multiauth.Model.Admin.{id}', function ($user, $id) {
    // $admin = Admin::find($id);
    // return $user->id == $admin->id;
    return true;
});
