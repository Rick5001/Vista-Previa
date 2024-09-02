<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurar los detalles del correo electrónico
    $to = 'rikirosario4@gmail.com';
    $subject = $_POST['subject'];
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $message = $_POST['message'];

    // Encabezados del correo electrónico
    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "El mensaje se envió correctamente."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Hubo un problema al enviar el mensaje."]);
    }
}
?>
