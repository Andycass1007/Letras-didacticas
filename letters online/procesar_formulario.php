<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatarios = array("andreacass877@gmail.com", "danielanaya395@gmail.com", "juandavisconterras@gmail.com", "ninoayalajuliancristobal@gmail.com", "juanduran0219@gmail.com", "jedacasal2017@gmail.com");
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["email"];
    $sugerencia = $_POST["sugerencia"];

    $asunto = "Nueva sugerencia de $nombre $apellido";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellido: $apellido\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Sugerencia:\n$sugerencia";

    foreach ($destinatarios as $destinatario) {
        mail($destinatario, $asunto, $mensaje);
    }

    echo "success";
} else {
    header("Location: index.html");
    exit();
}
?>
