//booleen qui check si on a validé les 2 datepicker, nous servira pour voir si on peut ou pas clicker sur une chambre
var datepick_done=false;
resetdisplayRooms=function(){
	for (var i = 0; i < 10; i++) {
		$("#n"+(i)).css('background-color', 'rgba(255,255,255,0)');
	};
}
$(function() {
	$("#ButtonGetDateBooking").click(function(){

		//je reset l'affichage de la map
		resetdisplayRooms(); 
		var date_start=$("#datepicker_start").val();
		var date_end=$("#datepicker_end").val();
		//si les datepicker ne sont pas remplis, on quitte la fonction et on envoit pas de requete ajax 
		//et affiche une erreur avec bootbox
		if(date_start=="")
		{
			alertMsg("date de début de séjour non remplie!");
			console.log('date de début de séjour non remplie!');
			return;
		}
		if(date_end=="")
		{
			alertMsg("date de fin de séjour non remplie!");
			console.log('date de fin de séjour non remplie!');
			return;
		}
		//on passe le booléen pour pouvoir selectionner une chambre a true
		datepick_done=true;
		resetLockedRoom();
		console.log('start:',date_start,'end:',date_end);
		console.log('debut envoi ajax');
		$.ajax({
			url: 'getbookedmap',
			type: 'POST',
			dataType: 'text',
			data: {data_date_start:date_start,data_date_end:date_end},
		})
		.done(function(data) {
			console.log("success");
			console.log(data);
			//je vides les champs avant de les remplir et je vide la tableau qui représente l'état des chambres
			
			$("#booked_room_datepicker").text('');
			$("#booked_room_number_datepicker").text('')
			//je remplis les chammbres déja bookées
			$("#booked_room_datepicker").text(data);
			var tab=getBookedRooms();
			var nb_booked_date=tab.length;
			//console.log("nb_booked_date",nb_booked_date,"tab booked room",tab);
			//je remplis le nombre de chambre déja bookées
			$("#booked_room_number_datepicker").text(nb_booked_date);
			displayBookedRooms(tab);
			var tab2=fillLockedRoom(tab);
			
			
			console.log("ajax bool",datepick_done);
			//var tab=$.parseJSON(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	});
});




