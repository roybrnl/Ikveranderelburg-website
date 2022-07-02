<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $subject = 'Ikveranderelburg Contactformulier';

  $email_from = 'Ikveranderelburg Contactformulier';


  $email_subject = $subject;

  $to = "info@ikveranderelburg.nl";





  $email_body = "U heeft een nieuw bericht van: $name [$visitor_email]\n".
                          "$message\r\n".
                          
                          $headers = " ";
                        
 
  mail($to,$email_subject,$email_body,$headers);

  echo "Uw bericht is verstuurd!"
?>