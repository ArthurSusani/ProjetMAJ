<?php

  /** 
  * Fichier d'enregistrement des demandes de contact
  */

  # récupération des paramètres
  $name = isset($_POST['name']) ? $_POST['name'] : ''; // champs name
  $email = isset($_POST['email']) ? $_POST['email'] : ''; // champs email
  $message = isset($_POST['message']) ? $_POST['message'] : ''; // champs message
  
  # variables
  $errors = []; // erreurs du script
  $success = false; // est ce qu'il y'a une erreur ?
  $min_characters = 50; // nombre de caractères minimum pour le champs message
  $filename = 'contact.csv';

  # traitement
  
  // suppression des espaces autour des chaînes
  $name = trim($name);
  $email = trim($email);
  $message = trim($message);
  
  // suppression des retours à la lignes dans le message
  $message = preg_replace("#\n|\t|\r#",'',$message);
  
  if( $name == '' ){ $errors['name'] = "Le champs nom est requis"; }
  if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){ $errors['email'] = "L'email saisi n'est pas valide"; }
  if( strlen($message)<$min_characters ){ $errors['message'] = "La longueur du message doit être supérieure à ".$min_characters." caractères"; }

  # si le tableau $errors est vide, alors l'opération est un success
  if( count($errors) == 0 ){
    $success = true;
    
    // on stocke la demande de contact dans un fichier csv
    file_put_contents($filename, "$name;$email;$message\n", FILE_APPEND);
    
  }

  # fin du script
  $result = ["success"=>$success,"errors"=>$errors];
  echo json_encode($result);





