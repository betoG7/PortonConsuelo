<?php



//$to = "ghportonconsuelo@gmail.com";
$to = "cristian.glg94@gmail.com";
$subject = "Nuevo Mensaje de ".$_POST('name');
$message = $_POST('msg');
$headers = "From: administracion@hopped.com.mx" ;
 
mail($to, $subject, $message, $headers);


?>