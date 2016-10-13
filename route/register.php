<?php 

// register get
Flight::route('GET /register', function(){
    // render partial
    Flight::render('backend/register',[],'body_content');

    // render to layout
    Flight::render('layout/backend');
});

// register post 
Flight::route('POST /register', function(){
    $request = Flight::request();
    $email = $request->data->email;
    $password = $request->data->password;

    $result = Flight::auth()->register($request->data->email,$request->data->password,$request->data->password);

    if(!$result['error']){
        Flight::flash()->success('Account created. You can now login');
        Flight::redirect('/login');
    }else{
    	Flight::flash()->error($result['message']);
        Flight::redirect('/register');
    }
});