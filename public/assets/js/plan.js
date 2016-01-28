$(function() {
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
			date.setDate( date.getDate() + 1 );        
			var newDate = date.toDateString(); 
			newDate = new Date( Date.parse( newDate ) );                      
			$('#datepicker_end').datepicker("option","minDate",newDate);            
		}
	});
	$( "#datepicker_end" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: "yy-mm-dd"
	});



	var roomLock = [	
			[[0, 120],[2, 120],[0, 120],[2, 150],[2, 80],[0, 120],[0, 120],[0, 80],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80],[0, 80]]
				]; // a faire en DB 

				//0 : libre
				//1 : selectionné 	rgba(125,255,125,0)
				//2 : reservé 		rgba(255,80,80,0.25)
				//2ème indice=prix de la chambre

	var nbRoomLock = 0;
	var etage = 0
	var roomSelects= [];
	var countSelect = 0;

	console.log('roomScan load');


	nbRoomView = function(nbRoom){
		var stringRoom = "Vous avez selectionné "+nbRoom+" chambre";
		if (nbRoom > 1) {stringRoom+="s"};
		$('#nbRoomSelect').text(stringRoom);
	}

	roomScan =function(){

		roomLock[etage].forEach(function(element, index){
			if (roomLock[etage][index][0] == 1) {
				$("#n"+index).css('background-color', 'rgba(125,255,125,0.7)');
			}else if(roomLock[etage][index][0] == 2){
				$("#n"+index).css('background-color', 'rgba(255,80,80,0.7)');
			}else{
				$("#n"+index).css('background-color', 'rgba(125,255,125,0)');
			}
		});
	}

	roomValid =function(){

		roomLock.forEach( function(element, index) {

			roomLock[etage].forEach(function(element, index){

				if (roomLock[etage][index][0] == 1) {

					countSelect++;

					roomSelects.push(index);

					//console.log(roomSelects);
					
				}
			});
		});
	}

	roomSelect = function(){
		var id = $(this).attr('id');
		var clrId = id.replace(/\D+/g,'');
		if (roomLock[etage][clrId][0] == 0) {
			$(this).css('background-color', 'rgba(125,255,125,0.7)');
			nbRoomLock++;
			roomLock[etage][clrId][0] = 1;
		}else if(roomLock[etage][clrId][0] == 1){
			$(this).css('background-color', 'rgba(255,255,255,0)');
			roomLock[etage][clrId][0] = 0;
			nbRoomLock--;
		}
		nbRoomView(nbRoomLock);
		roomValid();
	}

	switchStage = function(){
		etage = $('#ascenseur option:selected').val();
		roomScan();
		viewStage();

	}

	viewStage = function(){
		var stringStage = "Vous ètes au "+ $('#ascenseur option:selected').text();
		$('#stageRoomSelect').text(stringStage);
	}

	alertMsg = function (msg){
		bootbox.alert(msg, function() {	
		});		
	}

	roomScan();

	$('.chambre').on('click', roomSelect );
	$('#ascenseur').on('change', switchStage);
	//requete ajax pour envoi l'id de le chambre selectionnée
	$("#submitMapAjax").click(function(){
     
    $.ajax({
       url : 'more_com.php', // La ressource ciblée
       type : 'GET' // Le type de la requête HTTP.
    });
   
});

	//Julien: message de bienvenue avec bootbox
	alertMsg('Veuillez selectionner votre date de début de séjour et votre date de fin ci dessous');	

});