<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$para = "lucas.ocampo@istea.com.ar";
$asunto = "contacto desde la pagina web";
$cuerpo = "<h1>contacto</h1><img src='https://image.shutterstock.com/image-vector/dragon-logo-template-260nw-1062178949.jpg' style='width: 30%'><br><strong>Los datos recibidos son:</strong><br><p>nombre: " $nombre , "</p><p>correo: " $email , "</p><p>mensaje: " $comentario "<p>";
$cabecera = "from:" . $para . "/r/n";
$cabecera .= "MIME-version 1.0/r/n"
$cabecera .= "content-Type: text/html; charset=UTF-8 /r/n";
if (mail($para,$asunto,$cuerpo.$headers)){
    echo "mesnaje enviado correctamente"
}else{
    echo "ERROR: mensaje no enviado, intente nuevamente!"
}
?>