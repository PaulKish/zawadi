<?php

// admin route
Flight::route('/admin', function(){
	// check if admin
    if(Flight::auth()->isLogged()) {
    	
    	$fpdo = Flight::fpdo();

    	// get list of donors
    	$donors = $fpdo->from('donors')->orderBy('date desc');

	    Flight::render('backend/index',['donors'=>$donors,'count'=>1],'body_content');
	    
	    // render to layout
    	Flight::render('layout/backend');
	}else{
		Flight::redirect('/login');
	}
});

// donor route
Flight::route('/donor/@id', function($id){
	// check if admin
    if(Flight::auth()->isLogged()) {
    	
    	$fpdo = Flight::fpdo();

    	// get donor
    	$donor = $fpdo->from('donors',$id)->fetch();

	    Flight::render('backend/donor',['donor'=>$donor],'body_content');
	    
	    // render to layout
    	Flight::render('layout/backend');
	}else{
		Flight::redirect('/login');
	}
});