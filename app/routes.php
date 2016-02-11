<?php
	
$w_routes = array(
	['GET', 	'/', 					'Default#home', 	'home'], 					 				
	['GET', 	'/about', 				'Default#about', 	'about'],

//------------------------------Contact-------------------------------------			 				
	['GET|POST','/contact/contact', 	'Contact#contact', 	'contact_contact'],
	['GET',		'/contact/showcontact', 'Contact#viewcontact','contact_view'],
	['GET',		'/contact/details/[:id]', 'Contact#details','contact_details'],		 				
	['GET', 	'/contact/whoarewe', 	'Contact#whoarewe', 'contact_whoarewe'], 
	['GET|POST', '/contact/phpmailer', 	'Contact#phpmailer', 'contact_phpmailer'],	

//--------------------------------- Avis ----------------------------------	

	['GET|POST','/opinion/opinion', 	'Opinion#opinion', 	'opinion_insert'],
	['GET|POST','/opinion/opinion', 'Opinion#opinion','opinion_show'],			

//------------------------------ Gestion Compte -----------------------------
	['GET', 	'/log/index', 			'Log#index', 		'log_index'],
	['GET|POST', 	'/log/connect', 		'Log#connect', 		'log_connect'], 					
	['GET|POST','/log/register', 		'Log#register', 	'log_register'], 				
	['GET|POST', 	'/log/config', 		'Log#config', 		'log_config'], 	
	['GET|POST','/log/connect/error', 	'Log#error', 		'log_error'], 		
	['GET|POST','/log/connect/confirm', 'Log#confirm', 		'log_confirm'], 
	['GET|POST','/log/disconnect', 		'Log#disconnect', 	'log_disconnect'], 	
	['GET|POST','/log/userconfig', 		'Log#userconfig', 	'log_userconfig'],
	['GET|POST','/log/usersave', 		'Log#usersave', 	'log_usersave'],
	['GET|POST','/log/bookdel/[:id]', 		'Log#bookdel', 	'log_bookdel'],

//------------------------------Présentation--------------------------------
	['GET', 	'/introduct/index', 	'Introduct#index', 	'introduct_index'], 
	['GET', 	'/introduct/room', 		'Introduct#room', 	'introduct_room'],
	['GET', 	'/introduct/roomdetail/[:id]', 'Introduct#roomdetail', 'introduct_roomdetail'], 		
	['GET', 	'/introduct/hostel', 	'Introduct#hostel', 'introduct_hostel'], 	
	['GET', 	'/introduct/area', 		'Introduct#area', 	'introduct_area'],
	['GET', 	'/introduct/area3d', 		'Introduct#area3d', 'introduct_room_3d'],


//------------------------------Réservation---------------------------------

	['GET', 	'/booking/index', 		'booking#index', 	'booking_index'],	  
	['GET', 	'/booking/map', 		'booking#map', 		'booking_map'],
	['POST', 	'/booking/error', 		'booking#error', 	'booking_error'],	
	['GET|POST','/booking/map/pay',		'booking#pay', 		'booking_pay'],
	['GET|POST','/booking/bill/[:id]/[:id_booking]', 		'booking#bill', 	'booking_bill'],		
	['POST', 	'/booking/map/confirm', 'booking#confirm', 	'booking_confirm'],
	['GET', 	'/booking/phone', 		'booking#phone', 	'booking_phone'],	
	
//------------------------------Option--------------------------------------
	['GET', 	'/setting/index', 'setting#index', 	'setting_index'],
	['GET|POST', 	'/setting/users', 'setting#users', 	'setting_users'],
	['GET|POST', 	'/setting/book', 'setting#book', 	'setting_book'],
	['GET|POST', 	'/setting/comment', 'setting#comment', 	'setting_comment'],
	['GET|POST', 	'/setting/user/[:id]', 'setting#user', 	'setting_user'],
	['GET|POST', 	'/setting/usersave/[:id]', 'setting#usersave', 	'setting_usersave'],
	['GET|POST', 	'/setting/userdel', 'setting#userdel', 	'setting_userdel'],
	['GET|POST', 	'/setting/bookdel', 'setting#bookdel', 	'setting_bookdel'],
	['GET|POST', 	'/setting/commentdel', 'setting#commentdel', 	'setting_commentdel'],

// test ajax
	['POST', '/booking/getbookedmap', 'booking#getbookedmapmethod', 'ajax_send'],

//---------------------------Status/Erreur----------------------------------
	['GET|POST', '/status/sender/[:string]/[:link]', 'status#sender', 'status_sender'],

);