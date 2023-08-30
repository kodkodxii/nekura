<?php

$res = $_POST;

$to = "reservaciones@nekura.com.mx";
$subject = "wWb email";
$htmlContent = "<html><body><h1>Mensaje enviado desde la web</h1><p>Nombre: ".$_POST["name"]."</p><p>Correo: ".$_POST["mail"]."</p><p>Mensaje: ".$_POST["message"]."</p></body></html>";

$headers = "From: web@nekura.com.mx\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$send = mail($to, $subject, $htmlContent, $headers);

if($send){
    $res["msg"] = 'MENSAJE ENVIADO';
} else {    
    $res["msg"] = 'ERROR, INTENTE MAS TARDE';
}



?>