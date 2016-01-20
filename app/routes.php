<?php
	
$w_routes = array(
	['GET', 	'/', 					'Default#home', 	'home'], 					 				
	['GET', 	'/about', 				'Default#about', 	'about'],			 				
	['GET|POST','/contact', 			'Default#contact', 	'contact'], 		 				
	['GET', 	'/whoarewe', 			'Default#whoarewe', 'whoarewe'], 	 				
	['GET', 	'/comment', 			'Default#comment', 	'comment'], 	 	 				

//----------------------------- Gestion Compte-----------------------------
	['GET', 	'/log/index', 			'Log#index', 		'log_index'],
	['GET', 	'/log/connect', 		'Log#connect', 		'log_connect'], 					
	['GET|POST','/log/register', 		'Log#register', 	'log_register'], 				
	['POST', 	'/log/config', 			'Log#config', 		'log_config'], 	
	['GET|POST','/log/connect/error', 	'Log#error', 		'log_error'], 		
	['GET|POST','/log/connect/confirm', 'Log#confirm', 		'log_confirm'], 
	['GET|POST','/log/disconnect', 		'Log#disconnect', 	'log_disconnect'], 	

//----------------------------- Présentation-------------------------------
	['GET', 	'/introduct/index', 	'Introduct#index', 	'introduct_index'], 
	['GET', 	'/introduct/room', 		'Introduct#room', 	'introduct_room'], 		
	['GET', 	'/introduct/hostel', 	'Introduct#hostel', 'introduct_hostel'], 	
	['GET', 	'/introduct/area', 		'Introduct#area', 	'introduct_area'],	 

//------------------------------Réservation--------------------------------
	['GET', 	'/booking/index', 		'booking#index', 	'booking_index'],	  
	['GET', 	'/booking/map', 		'booking#map', 		'booking_map'],
	['POST', 	'/booking/error', 		'booking#error', 	'booking_error'],	
	['GET|POST','/booking/map/pay/[:id]','booking#pay', 	'booking_pay'],
	['GET|POST','/booking/bill', 		'booking#bill', 	'booking_bill'],		
	['POST', 	'/booking/map/confirm', 'booking#confirm', 	'booking_confirm'],
	
//---------------------------- Option -------------------------------------
	['GET', 	'/setting/index', 'setting#index', 	'setting_index'],
	['GET', 	'/setting/user', 'setting#user', 	'setting_user'],
	['GET', 	'/setting/book', 'setting#book', 	'setting_book'],
);