<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'], 					 				
		['GET', '/about', 'Default#about', 'about'],			 				
		['GET', '/contact', 'Default#contact', 'contact'], 		 				
		['GET', '/whoarewe', 'Default#whoarewe', 'whoarewe'], 	 				
		['GET', '/comment', 'Default#comment', 'comment'], 	 	 				

//----------------------------- Gestion Compte-----------------------------
		['GET', '/log/index', 'Log#index', 'log_index'],
		['GET', '/log/connect', 'Log#connect', 'log_connect'], 					
		['GET', '/log/register', 'Log#register', 'log_register'], 				
		['GET', '/log/config', 'Log#config', 'log_config'], 					

//----------------------------- Présentation-------------------------------
		['GET', '/introduct/index', 'Introduct#index', 'introduct_index'], 
		['GET', '/introduct/room', 'Introduct#room', 'introduct_room'], 		
		['GET', '/introduct/hostel', 'Introduct#hostel', 'introduct_hostel'], 	
		['GET', '/introduct/area', 'Introduct#area', 'introduct_area'],	 

//------------------------------Réservation--------------------------------
		['GET', '/booking/index', 'booking#index', 'booking_index'],	 
		['GET', '/booking/error', 'booking#error', 'booking_error'],	 
		['GET', '/booking/area', 'booking#area', 'booking_area'],



	);