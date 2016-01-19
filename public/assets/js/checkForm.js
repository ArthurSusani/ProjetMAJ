$(function(){
	console.log('Dom Loaded');

	$('form').on("submit", function(evt){
		console.log("envoi formulaire");
		// Variable qui définit si les champs sont ok ou pas, par défaut c'est ok et on met a false en cas d'erreur
		var verifok=true;

		// vérif champ prénom
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

		//vérif champ nom
		if ( $('[name=lastname]').val()=="") {
			console.log('nom ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=lastname]').css('border','3px solid #EC1717');
			$('[name=lastname]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('nom ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=lastname]').css('border','none');
			$('[name=lastname]').prev('p').css('visibility','hidden');

		}

		//vérif champ mail
		if ( $('[name=mail]').val()=="") {
			console.log('mail ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=mail]').css('border','3px solid #EC1717');
			$('[name=mail]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('mail ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=mail]').css('border','none');
			$('[name=mail]').prev('p').css('visibility','hidden');

		}

		//vérif champ adresse postale
		if ( $('[name=address]').val()=="") {
			console.log('address ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=address]').css('border','3px solid #EC1717');
			$('[name=address]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('address ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=address]').css('border','none');
			$('[name=address]').prev('p').css('visibility','hidden');

		}
		//vérif champ code postal
		if ( $('[name=postalCode]').val()=="") {
			console.log('postalCode ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=postalCode]').css('border','3px solid #EC1717');
			$('[name=postalCode]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('postalCode ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=postalCode]').css('border','none');
			$('[name=postalCode]').prev('p').css('visibility','hidden');

		}
		//vérif champ ville
		if ( $('[name=city]').val()=="") {
			console.log('city ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=city]').css('border','3px solid #EC1717');
			$('[name=city]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('city ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=city]').css('border','none');
			$('[name=city]').prev('p').css('visibility','hidden');

		}
		//vérif champ date naissance
		if ( $('[name=birthday]').val()=="") {
			console.log('birthday ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=birthday]').css('border','3px solid #EC1717');
			$('[name=birthday]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('birthday ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=birthday]').css('border','none');
			$('[name=birthday]').prev('p').css('visibility','hidden');

		}
		//vérif champ password1
		if ( $('[name=password]').val()=="") {
			console.log('password ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=password]').css('border','3px solid #EC1717');
			$('[name=password]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			console.log('password ok');
			// sinon , on remet les comportement normaux, afin de voir si on a corrigé notre erreur.
			$('[name=password]').css('border','none');
			$('[name=password]').prev('p').css('visibility','hidden');

		}
		//vérif champ password2 (doit etre égal au password1)										
		if ( $('[name=password_confirm]').val()=="") {
			console.log('password_confirm ko');
			// si il est vide, on met une bordure au champ , on affiche le message d'erreur, et on met la variable sendit a false
			$('[name=password_confirm]').css('border','3px solid #EC1717');
			$('[name=password_confirm]').prev('p').css('visibility','visible');
			verifok=false;
		} else {
			var pass1=$('[name=password]').val();
			var pass2=$('[name=password_confirm]').val();
			console.log('pass1:',pass1);
			console.log('pass2:',pass2);
			if(pass1==pass2){
				console.log("les pass sont identiques");
				$('[name=password_confirm]').css('border','none');
				$('[name=password_confirm]').prev('p').css('visibility','hidden');
			}
			else{
				verifok=false;
				$('[name=password_confirm]').prev('p').css('visibility','hidden');
				$('[name=password_confirm]').prev('p').prev('p').css('visibility','visible');
				console.log('les pass sont différents');
			}



		}
		//fin vérif formulaire
		console.log('verif formulaire:',verifok);
		//si tous les champs sont ok alors la variable verifok sort d'ici a true
		if (!verifok){
			// Si la variable est fausse apres les verifications, il manque un champ , on n'envoit pas !
			evt.preventDefault();
		} else {
			//si tout est bien rempli on affiche un message 
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