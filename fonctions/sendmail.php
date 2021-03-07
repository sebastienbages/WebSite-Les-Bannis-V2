<?php

  if (!isset($_POST['email']) && !isset($_POST['message'])) {
    return http_response_code(400);
  }

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
  {
    $dest = "sbages.dev@gmail.com";
    $sujet = "Vous avez reçu un mail depuis le site internet";
    $corp = "Addresse email de l'envoyeur : " . $_POST['email'];
    $corp .= "\n";
    $corp .= "-----------------------------------------------";
    $corp .= "\n";
    $corp .= "Son message :";
    $corp .= "\n";
    $corp .= "\n";
    $corp .= strip_tags($_POST['message']);
    $headers = "From: " . $_POST['email'];
  
    if (mail($dest, $sujet, $corp, $headers)) 
    {
      return http_response_code(200);
    } 
    else 
    {
      return http_response_code(400);
    }
  }
  else 
  {
    return http_response_code(400);
  }

?>