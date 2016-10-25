<?php 

// landing page route
Flight::route('/', function(){
	// render partial
	Flight::render('frontend/index',[],'body_content');

	// render to layout
	Flight::render('layout/frontend');
});

// donate 
Flight::route('POST /index', function() use($config) {
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

	$recaptcha = Flight::recaptcha();

	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if($resp->isSuccess()){
    	
    	$fpdo = Flight::fpdo();

		$insert = $fpdo->insertInto('donors')->values($data)->execute();
		if($insert){
			// send acknowledgement email
			$mail = Flight::mail();

			$mail->isSMTP();                                      
			$mail->Host = $config['smtp_host'];  
			$mail->SMTPAuth = true;                               
			$mail->Username = $config['smtp_user'];                 
			$mail->Password = $config['smtp_pass'];                           
			$mail->SMTPSecure = 'tls';                            
			$mail->Port = $config['smtp_port'];   

			$mail->setFrom($config['site_email'], 'Zawadi Africa');
			$mail->addAddress($data['email']);

			$mail->isHTML(true);

			$mail->Subject = 'Thank You';

			// hmmh must be a better way to do this
			ob_start();
			include ('views/email/index.php');
			$output = ob_get_contents();
			ob_end_clean();
			$mail->Body  = $output;
			$contents = ob_get_contents();
			ob_end_clean();

			$mail->send();

			Flight::flash()->success('Donation pledge has been added. Thank you for your support');
		}else{
			Flight::flash()->error('Please try again');
		}
    }else{
    	Flight::flash()->error('Please fill the form correctly');
    }

	Flight::redirect('/');        
});