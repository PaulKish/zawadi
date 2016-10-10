<?php
require 'vendor/autoload.php';

// register PDO
Flight::register('db', 'PDO',["mysql:host=localhost;dbname=zawadi", "root", "root"]);

// register phpauth config
Flight::register('config', 'PHPAuth\Config',[Flight::db()]);

// register phpauth
Flight::register('auth', 'PHPAuth\Auth',[Flight::db(),Flight::config()]);

//Set page title
Flight::view()->set('site_name', 'Zawadi Africa | Education Fund');

// landing page route
Flight::route('/', function(){
	// render partial
    Flight::render('index',[],'body_content');

    // render to layout
    Flight::render('layout');
});

// donate
Flight::route('POST /donate', function(){
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

    // store data to db
    $db = Flight::db();

    // check if email exists
    $statement = $db->prepare("SELECT email FROM donors WHERE email = :email");
    $statement->execute(array(':email' => $data['email']));
    $row = $statement->fetch();

    if(!$row){
        // prepared statement
        $statement = $db->prepare("
                INSERT INTO donors (donation_type,amount,payment_installment,payment_method,name,physical_address,email,tel_cell,anonymous) 
                VALUES (:donation_type, :amount, :payment_installment,:payment_method,:name,:physical_address,:email,:tel_cell,:anonymous)");
        
        // store data to db
        $result = $statement->execute($data);
        if($result){
            echo  "Success";
        }else{
            var_dump($stmt->errorCode());
        }
    }else{
        echo 'Donation exists';
    }  
});


// login route
Flight::route('/login', function(){
	// render partial
    Flight::render('login',[],'body_content');

    // render to layout
    Flight::render('layout');
});

// register
Flight::route('POST /register', function(){
    $request = Flight::request();
    $email = $request->data->email;
    $password = $request->data->password;

    $result = Flight::auth()->register($request->data->email,$request->data->password,$request->data->password);

    print_r($result);
});

// auth
Flight::route('POST /auth', function(){
    $request = Flight::request();
    $email = $request->data->email;
    $password = $request->data->password;
    $remember = 1;

    $result = Flight::auth()->login($request->data->email,$request->data->password,$remember);

    if(!$result['error']){
    	setcookie(Flight::config()->cookie_name,$result['hash']); // set cookie for auth
    	Flight::redirect('/admin');
    }else{
    	Flight::redirect('/login');
    }
});

// admin route
Flight::route('/admin', function(){
	
    if (!Flight::auth()->isLogged()) {
	    header('HTTP/1.0 403 Forbidden');
	    echo "Forbidden";
	}else{
		echo 'Logged in';
	}
});

Flight::start();
?>