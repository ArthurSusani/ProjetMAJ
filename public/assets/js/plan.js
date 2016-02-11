var nbRoomLock = 0;


	alertMsg = function (msg){
		bootbox.alert(msg, function() {	
		});		
	}
$(function() {
	
	
	console.log('début plan.js');   
	//on creer un élement datepicker de JqueryUi avec les options par défaut.
	//dd-M-yy
	$( "#datepicker_start" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: "yy-mm-dd", 
		minDate:  0,//les dates antérieures a la date du jour sont inactives...
		//quand on selectionne le datepicker1 alors ajuste le datepicker2 pour que les dates antérieure soientt inactives
		onSelect: function(date){            
			var date1 = $('#datepicker_start').datepicker('getDate');           
			var date = new Date( Date.parse( date1 ) ); 
			date.setDate( date.getDate() );//je permet de réserver une seule nuit ici si j'enlève le +1        
			var newDate = date.toDateString(); 
			newDate = new Date( Date.parse( newDate ) );                      
			$('#datepicker_end').datepicker("option","minDate",newDate);
			//ici je reset le tableau roomLock...
			//resetLockedRoom();

		}
	});
	$( "#datepicker_end" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: "yy-mm-dd"
	});


	var roomLock = [0,0,0,0,0,0,0,0,0,0]; //juste besoin d'un tableau a une dimension pour stocker l'état de chaque chambre

				//0 : libre
				//1 : selectionné 	rgba(125,255,125,0)
				//2 : reservé 		rgba(255,80,80,0.25)
				//2ème indice=prix de la chambre

/*	var roomLock2 = [	
			[0],[0],[0],[0],[0],[0],[0],[0],[0],[0]
				]; // a faire en DB */

				

	
	var etage = 0
	var roomSelects= [];
	var countSelect = 0;
	console.log('roomScan load');


		//fonction qui va chercher les chambres déja bookées dans le dom dans le span avec l'id #booked_room_datepicker et retourne un tableau d'id de chambre
	getBookedRooms= function(){
		

		var booked_room_dp=$("#booked_room_datepicker").text();

		if(booked_room_dp!=""){
				//converti la chaine en un tableau a partir du séparateur '-'
				var booked_room_array=booked_room_dp.split("-");
				//console.log(booked_room_array);
				return booked_room_array;
			}
		return false;//si aucune chambre bookée on retourne false
	}

	//fonction pour reset le tableau quand on actualise les données
	resetLockedRoom= function(){
		for (var i = 0; i < roomLock.length; i++) {
			roomLock[i]=0;
		};
	}

	//fonction qui remplit le tableau global de chambre roomLock avec les chambrés déja bookées (état 2) et retourne le tableau roomLock remplis
	fillLockedRoom= function(tab){
	for (var i = 0; i < tab.length; i++) {
		var item=tab[i];
		var index=item-1;
		roomLock[index]=2;
		
	};
	console.log(roomLock);
	return roomLock;
		
	}
	//fonction qui va remplir le input hidden et le span d'information avec une chaine des chambres sélectionnées au format ex: "1-2-8"
	//prend en paramètre un tableau de chambre ex: ["1","6"]

	fillHiddenInputSelectedRoom= function(tab){
		console.log(tab);
		var length_tab=tab.length;
		var str="";

		//str=tab.join('-');
		//console.log("joined:",str);

		if(length_tab>0)
		{
			for (var i = 0; i < tab.length; i++) 
			{
				if(tab[i]=='1')
				{
				str+=(i+1);
				str+='-';
				}

			};
			var strl=str.length;
			var lastchar=str[strl-1];
			//si j'ai un "-" a la fin de la chaine je l'enlève
			if(lastchar=="-"){
				str=str.substring(0,strl-1);
			}
			
			console.log("string",str);
			//je place la chaine dans le champ hidden pour traitement futur par le script php du formulaire pour récupérer la ou les chambres choisies par le client sur la map
			$("#input_client_selected_room").val(str);
			$("#SpanSelectedRoom").text(str);	
		
		}
		else
		{
			return false;//si aucun élément dans le tableau en arg alors retourne false
		}
	}


	nbRoomView = function(nbRoom){
		var stringRoom = "Vous avez selectionné "+nbRoom+" chambre";
		if (nbRoom > 1) {stringRoom+="s"};
		$('#nbRoomSelect').text(stringRoom);
	}


	displayBookedRooms =function(tab){
		
		
		if(tab==false){
			return false;
		}
		else{
			var len=tab.length;
			tab.forEach(function(element, index){
			//console.log('index',index,'element',element);
			$("#n"+(element-1)).css('background-color', 'rgba(255,80,80,0.7)');
		});
	}
}



	roomValid =function(){

		roomLock.forEach( function(element, index) {

		

				if (roomLock[index][0] == 1) {

					countSelect++;

					roomSelects.push(index);

					//console.log(roomSelects);
					
				}
			
		});
	}

	roomSelect = function(){
		var lockedRoom=getBookedRooms();
	
		var id = $(this).attr('id');
	
		var clickedRoomId = id.replace(/\D+/g,'');
	

		if (roomLock[clickedRoomId] == 0) {
			$(this).css('background-color', 'rgba(125,255,125,0.7)');

			nbRoomLock++;
			roomLock[clickedRoomId] = 1;
		}else if(roomLock[clickedRoomId] == 1){
			$(this).css('background-color', 'rgba(255,255,255,0)');
			roomLock[clickedRoomId] = 0;
			nbRoomLock--;
		}
		nbRoomView(nbRoomLock);
		console.log("état roomlock ici",roomLock);
		fillHiddenInputSelectedRoom(roomLock);
		roomValid();
	}


/*	switchStage = function(){
		etage = $('#ascenseur option:selected').val();
		roomScan();
		viewStage();

	}

	viewStage = function(){
		var stringStage = "Vous ètes au "+ $('#ascenseur option:selected').text();
		$('#stageRoomSelect').text(stringStage);
	}*/

	//retourn le nombre de room sélectionnées sur la map
		RoomSelectCount= function(){
		return nbRoomLock;
	}

	

	//displayBookedRooms();
/*	checkBeforeSubmitBooking= function(){
		console.log('submi booking');
		preventDefault();
	}*/

	
	var tab=getBookedRooms();
	console.log("ici",tab);
	var tab2=fillLockedRoom(tab);
	fillHiddenInputSelectedRoom(roomLock);
/*	console.log(roomLock2);
	console.log(roomLock2[0],roomLock2[1]);*/

	$('.chambre').on('click', roomSelect );
	$("#submitBookRoom").submit(function (e) {
	console.log('submit booking');
	console.log('bool',datepick_done);
	if(!datepick_done)
		{
		alertMsg("Vous devez dabord sélectionner une date de début et une date de fin et clicker sur afficher plus haut!")
    	e.preventDefault();
    	}
    	else{
    		console.log("on continue");
    		nb_sel=RoomSelectCount();
    		if(nb_sel==0){
    			alertMsg("Vous n'avez sélectionné aucune chambre!");
    			e.preventDefault();
    		}
    		else
    		{
    		console.log("RoomSelectCount: ",nb_sel);
    		//il me faut: la liste des chambres sélectionnées
    		//le user en cours (en principe ca c'est ok)
    		//la durée du séjour
    		//prix de la ou les chambres
    		//mettre autant de booking qu'il y a besoin dans le PDF
    		//faire le total dans la facture
    		}
    	} 
	});


	//Julien: message de bienvenue avec bootbox
	alertMsg('Veuillez selectionner votre date de début de séjour et votre date de fin ci dessous');
	

});

