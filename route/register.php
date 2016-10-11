<?php 

// register post 
Flight::route('POST /register', function(){
    $request = Flight::request();
    $email = $request->data->email;
    $password = $request->data->password;

    $result = Flight::auth()->register($request->data->email,$request->data->password,$request->data->password);
});