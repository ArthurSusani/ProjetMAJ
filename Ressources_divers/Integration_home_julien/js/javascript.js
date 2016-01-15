$(function(){
	console.log('Dom Loaded');

	$('form').on("submit", function(evt){
		// Variable qui confirme ou infirme l'envoi du formulaire
		var sendit=true;

		// on verifie si le champ name est vide
		if ( $('[name=name]').val()=="") {
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=name]').css('border','1px solid #ff745d');
			$('[name=name]').next('p').css('visibility','visible');
			sendit=false;
		} else {
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			 $('[name=name]').css('border','none');
			 $('[name=name]').next('p').css('visibility','hidden');
			 sendit=true;
		}

		if ( $('[name=email]').val()=="") {
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=email]').css('border','1px solid #ff745d');
			$('[name=email]').next('p').css('visibility','visible');
			sendit=false;
		} else {
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=email]').css('border','none');
			$('[name=email]').next('p').css('visibility','hidden');
			sendit=true;

		}

		if ( $('[name=message]').val()=="Bonjour..." || $('[name=message]').val()=="") {
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=message]').css('border','1px solid #ff745d');
			$('[name=message]').next('p').css('visibility','visible');
			sendit=false;
		} else {
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=message]').css('border','none');
			$('[name=message]').next('p').css('visibility','hidden');
			sendit=true;
		}

		if (!sendit){
			// Si la variable est fausse apres les verifications, il manque un champ , on n'envoit pas !
			evt.preventDefault();
		} else {
			// Si la variable est à true , on envoi toujours pas le formulaire de maniere standard, puisqu'on le fais en AJAX !
			evt.preventDefault();
			// On récupere les valeurs des champs de formulaire
			var name = $('[name=name]').val();
			var email = $('[name=email]').val();
			var message = $('[name=message]').val();

		// on envoie une requete AJAX

			$.ajax({
				url: '../php/submit.php',
				type: 'POST',
				dataType: 'JSON',
				data: {name: name, email: email, message: message},
			})

			.done(function(data) {

				// On arrive ici si le script nous renvoie un fichier JSON
				console.log("success");
				console.log(data['errors']);

				// On ajoute l'erreur préenregistré dans le script si elle existe
				if (data['errors']['name'] != '') {
					$('[name=name]').parent().append('<p>'+data['errors']['name']+'</p>');
				};

				// On ajoute l'erreur préenregistré dans le script si elle existe
				if (data['errors']['email'] != '') {
					$('[name=email]').parent().append('<p>'+data['errors']['email']+'</p>');
				};

				// On ajoute l'erreur préenregistré dans le script si elle existe
				if (data['errors']['message'] != '') {
					$('[name=message]').parent().append('<p>'+data['errors']['message']+'</p>');
				};

				// Si il n'y a aucune erreur, le script renvoi succes à true, on supprime le formulaire et ajoutons un message de confirmation .
				if (data['success']==true){
					$('form').remove();
					$('#inscriptions').append('<p id="valid">“Merci, votre demande a bien été prise en compte"</p>')
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		}
	});

	// Bonus smoothscroll !

	$('footer>a').on("click", function(evt){
		console.log(evt);
		evt.preventDefault();
		$('body').animate({scrollTop: $('body').offset().top}, 1000 );
	})
});