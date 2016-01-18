$(function(){
	console.log('Dom Loaded');

	$('form').on("submit", function(evt){
		console.log("envoi formulaire");
		// Variable qui confirme ou infirme l'envoi du formulaire
		var verifok=true;

		// on verifie si le champ name est vide
		if ( $('[name=firstname]').val()=="") {
			console.log('prenom ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=firstname]').css('border','3px solid #EC1717');
			$('[name=firstname]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('prenom ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			 $('[name=firstname]').css('border','none');
			 $('[name=firstname]').prev('p').css('visibility','hidden');
		}

		if ( $('[name=mail]').val()=="") {
			console.log('mail ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=mail]').css('border','3px solid #EC1717');
			$('[name=mail]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('mail ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=email]').css('border','none');
			$('[name=email]').prev('p').css('visibility','hidden');

		}
		console.log('verif formulaire:',verifok);
//si tous les champs sont ok alors la variable verifok sort d'ici a true
		if (!verifok){
			// Si la variable est fausse apres les verifications, il manque un champ , on n'envoit pas !
			evt.preventDefault();
		} else {
			// Si la variable est à true , on envoi toujours pas le formulaire de maniere standard, puisqu'on le fais en AJAX !
			// On récupere les valeurs des champs de formulaire
			var firstname = $('[name=firstname]').val();
			var lastname = $('[name=lastname]').val();
			var mail = $('[name=mail]').val();
			console.log('prénom',firstname);
			console.log('nom',lastname);
			console.log('mail',mail);
		}

	});
});