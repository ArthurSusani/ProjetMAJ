<?php
	
$w_routes = array(
	['GET', 	'/', 					'Default#home', 	'home'], 					 				
	['GET', 	'/about', 				'Default#about', 	'about'],
	['GET', 	'/comment', 			'Default#comment', 	'comment'],

//----------------------------- Contact ----------------------------------			 				
	['GET|POST','/contact/contact', 	'Contact#contact', 	'contact_contact'],
	['GET',		'/contact/showcontact', 'Contact#viewcontact','contact_view'],	 				
	['GET', 	'/contact/whoarewe', 	'Contact#whoarewe', 'contact_whoarewe'], 
	['GET|POST', 	'/contact/phpmailer', 	'Contact#phpmailer', 'contact_phpmailer'],				
	 	 	 				
//----------------------------- Gestion Compte-----------------------------
	['GET', 	'/log/index', 			'Log#index', 		'log_index'],
	['GET', 	'/log/connect', 		'Log#connect', 		'log_connect'], 					
	['GET|POST','/log/register', 		'Log#register', 	'log_register'], 				
	['GET|POST', 	'/log/config', 			'Log#config', 		'log_config'], 	
	['GET|POST','/log/connect/error', 	'Log#error', 		'log_error'], 		
	['GET|POST','/log/connect/confirm', 'Log#confirm', 		'log_confirm'], 
	['GET|POST','/log/disconnect', 		'Log#disconnect', 	'log_disconnect'], 	

//----------------------------- Présentation-------------------------------
	['GET', 	'/introduct/index', 	'Introduct#index', 	'introduct_index'], 
	['GET', 	'/introduct/room', 		'Introduct#room', 	'introduct_room'],
	['GET', 	'/introduct/roomdetail/[:id]', 'Introduct#roomdetail', 'introduct_roomdetail'], 		
	['GET', 	'/introduct/hostel', 	'Introduct#hostel', 'introduct_hostel'], 	
	['GET', 	'/introduct/area', 		'Introduct#area', 	'introduct_area'],	 

//------------------------------Réservation--------------------------------
	['GET', 	'/booking/index', 		'booking#index', 	'booking_index'],	  
	['GET', 	'/booking/map', 		'booking#map', 		'booking_map'],
	['POST', 	'/booking/error', 		'booking#error', 	'booking_error'],	
	['GET|POST','/booking/map/pay/[:id]','booking#pay', 	'booking_pay'],
	['GET|POST','/booking/bill/[:id]', 		'booking#bill', 	'booking_bill'],		
	['POST', 	'/booking/map/confirm', 'booking#confirm', 	'booking_confirm'],
	['GET', 	'/booking/phone', 		'booking#phone', 	'booking_phone'],	
	
//---------------------------- Option -------------------------------------
	['GET', 	'/setting/index', 'setting#index', 	'setting_index'],
	['GET', 	'/setting/user', 'setting#user', 	'setting_user'],
	['GET', 	'/setting/book', 'setting#book', 	'setting_book'],

//---------------------------Status/Erreur----------------------------------
	['GET|POST', '/status/warning/[:string]', 'status#sender', 'status_sender'],
	['GET|POST', '/status/warning/[:string]', 'status#show', 'status_show'],
);