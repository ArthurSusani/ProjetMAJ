$(function() {

	var roomLock = [	
			[[0, 120],[2, 120],[0, 120],[2, 150],[2, 80],[0, 120],[0, 120],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80]],
			[[0, 120],[0, 120],[0, 120],[0, 150],[0, 80],[0, 120],[0, 120],[0, 80],[0, 80]]
				]; // a faire en DB 

				//0 : libre
				//1 : selectionné 	rgba(125,255,125,0)
				//2 : reservé 		rgba(255,80,80,0.25)

	var nbRoomLock = 0;
	var etage = 0


	console.log('roomScan load');


	nbRoomView = function(nbRoom){
		var stringRoom = "Vous avez selectionné "+nbRoom+" chambre";
		if (nbRoom > 1) {stringRoom+="s"};
		$('#nbRoomSelect').text(stringRoom);
	}

	roomScan =function(){

		roomLock[etage].forEach(function(element, index){
			if (roomLock[etage][index][0] == 1) {
				$("#n"+index).css('background-color', 'rgba(125,255,125,0.25)');
			}else if(roomLock[etage][index][0] == 2){
				$("#n"+index).css('background-color', 'rgba(255,80,80,0.25)');
			}else{
				$("#n"+index).css('background-color', 'rgba(125,255,125,0)');
			}
		});
	}

	roomSelect = function(){
		console.log(etage);
		var id = $(this).attr('id');
		var clrId = id.replace(/\D+/g,'');
		if (roomLock[etage][clrId][0] == 0) {
			$(this).css('background-color', 'rgba(125,255,125,0.25)');
			nbRoomLock++;
			roomLock[etage][clrId][0] = 1;
		}else if(roomLock[etage][clrId][0] == 1){
			$(this).css('background-color', 'rgba(255,255,255,0)');
			roomLock[etage][clrId][0] = 0;
			nbRoomLock--;
		}
		nbRoomView(nbRoomLock);
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


	roomScan();

	$('.chambre').on('click', roomSelect );
	$('#ascenseur').on('change', switchStage);

});