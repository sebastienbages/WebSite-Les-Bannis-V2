<?php

    if (!isset($_POST['email']) && !isset($_POST['message'])) {
      return http_response_code(400);
    }

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
      $to    = "randgeur31@gmail.com";
      // adresse MAIL OVH liée à l’hébergement.
      $from  = "site-les-bannis@lesbannis.fr";
      ini_set("SMTP", "smtp.lesbannis.fr");   // Pour les hébergements mutualisés Windows de OVH
      $JOUR  = date("d-m-Y");
      $HEURE = date("H:i");
      $Subject = "Les Bannis Email";
  
      $mail_Data = "";
      $mail_Data .= "<html>";
      $mail_Data .= "<head>";
      $mail_Data .= "<title> Subject </title>";
      $mail_Data .= "</head>";
      $mail_Data .= "<body>";
      $mail_Data .= "Le " . $JOUR . " à " . $HEURE . "<br>";
      $mail_Data .= "Vous avez reçu un email de : <b>" . $_POST['email'] . "</b><br>";
      $mail_Data .= "<br>";
      $mail_Data .= strip_tags($_POST['message']);
      $mail_Data .= "</body>";
      $mail_Data .= "</HTML>";
  
      $headers  = "MIME-Version: 1.0 \n";
      $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
      $headers .= "From: $from \n";
      $headers .= "Disposition-Notification-To: $from  \n";
  
      // Message de Priorité haute
      // -------------------------
      $headers .= "X-Priority: 1  \n";
      $headers .= "X-MSMail-Priority: High \n";
  
      $CR_Mail = TRUE;
      $CR_Mail = @mail($to, $Subject, $mail_Data, $headers);
  
      if ($CR_Mail === FALSE)
      {
        return http_response_code(400);
      }
      else
      {
        return http_response_code(200);
      }
    }
    else
    {
      return http_response_code(200);
    }

?>