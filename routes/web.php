<?php

use App\Helpers\Helpers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $a = Helpers::appClasses();

    // dd($a);
    $pageConfigs = ['myLayout' => 'blank'];

    return view('content.auth.auth-login-cover', ['pageConfigs' => $pageConfigs]);
});
