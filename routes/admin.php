<?php

    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::GET('/password/change', 'AdminController@showChangePasswordForm')->name('admin.password.change');
    Route::POST('/password/change', 'AdminController@changePassword');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');
    Route::get('/me', 'AdminController@me')->name('admin.me');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    // active status
    Route::post('activation/{admin}', 'ActivationController@activate')->name('admin.activation');
    Route::delete('activation/{admin}', 'ActivationController@deactivate');
    Route::resource('permission', 'PermissionController');

    //  Users
    Route::get('/users', 'AdminController@getUsers')->name('admin.showusers');
    Route::post('/getusers', 'AdminController@getUsers_ajax')->name('admin.getusers');
    Route::post('/delete/user', 'AdminController@deleteUser')->name('admin.user.delete');

   // orders

   Route::get('/orders', 'AdminController@showorders')->name('admin.showorders');

   Route::post('/getorders', 'AdminController@getOrders_ajax')->name('admin.getorders');

   Route::get('/order/{id}', 'AdminController@orderDetail')->name('admin.orderdetail');

   Route::get('/download/{session}/{foldername}/{filename}', 'DownloadFileController@downloadReferenceFile')->name('admin.downloadreferencefile');

   Route::get('/download/{session}/{filename}', 'DownloadFileController@downloadFile')->name('admin.downloadfile');

  Route::post('/gettodayorders', 'AdminController@gettodayOrders_ajax')->name('admin.gettodayorders');

  Route::get('/transaction', 'AdminController@getTransactions')->name('admin.transaction');

  Route::post('/get/transaction', 'AdminController@getTransactionsajx')->name('admin.gettrancsation');




    Route::fallback(function () {
        return abort(404);
    });
