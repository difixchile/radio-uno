<?php
 $to = "radiounochillan@gmail.com";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Su mensaje ha sido enviado correctamente. Nos pondremos en contacto pronto.');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'Ha ocurrido un error, por favor, vuelva a intentar más tarde.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>