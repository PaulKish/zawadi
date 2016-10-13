<?php

// login route
Flight::route('GET /login', function(){
    // render partial
    Flight::render('backend/login',[],'body_content');

    // render to layout
    Flight::render('layout/backend');
});

// login post
Flight::route('POST /login', function(){
    $request = Flight::request();
    $email = $request->data->email;
    $password = $request->data->password;
    $remember = 1;

    $result = Flight::auth()->login($request->data->email,$request->data->password,$remember);

    if(!$result['error']){
        setcookie(Flight::config()->cookie_name,$result['hash']); // set cookie for auth
        Flight::flash()->success('You are logged in');
        Flight::redirect('/admin');
    }else{
        Flight::flash()->error($result['message']);
        Flight::redirect('/login');
    }
});

// logout route
Flight::route('/logout', function(){
    $hash = $_COOKIE[Flight::config()->cookie_name];
    Flight::auth()->logout($hash);

    Flight::flash()->success('You are logged out');
    Flight::redirect('/login');
});