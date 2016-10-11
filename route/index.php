<?php 

// landing page route
Flight::route('/', function(){
	// render partial
    Flight::render('frontend/index',[],'body_content');

    // render to layout
    Flight::render('layout/frontend');
});

// donate
Flight::route('POST /index', function(){
    $request = Flight::request();
    
    $data['donation_type'] = $request->data->donation_type;
    $data['amount'] = $request->data->amount;
    $data['payment_installment'] = $request->data->payment_installment;
    $data['payment_method'] = $request->data->payment_method;
    $data['name'] = $request->data->name;
    $data['physical_address'] = $request->data->physical_address;
    $data['email'] = $request->data->email;
    $data['tel_cell'] = $request->data->tel_cell;
    $data['anonymous'] = $request->data->anonymous;

  	$fpdo = Flight::fpdo();
  	/*
  	$check_exist = $fpdo->from('donors')->where('email',$data['email'])->fetch();
  	if($check_exist){
  		Flight::flash()->error('Donor email exists');
  		Flight::redirect('/');
  	}*/

  	$insert = $fpdo->insertInto('donors')->values($data)->execute();
  	if($insert){
  		Flight::flash()->success('Donation plegde has been added');
  	}else{
  		Flight::flash()->error('Please try again');
  	}

  	Flight::redirect('/');        
});