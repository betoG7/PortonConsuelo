<?php

//Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

      //Obtenemos valores input formulario
      $nombre = $_POST['name'];
      $email = $_POST['email'];
      $subject = "Contacto Página Web";   
      $mensaje = $_POST['msg'];
      $para = 'ghportonconsuelo@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . "administracion@hopped.com" . "\r\n";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
        echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias, pronto nos pondremos en contacto con usted.');
            window.location.href='http://granhotelportondeconsuelo.com/';
         </script>";
         
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
?>