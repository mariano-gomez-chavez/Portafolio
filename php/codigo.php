<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //Esto asegura que la parte del código que envía el correo electrónico y muestra la respuesta al usuario solo se ejecute cuando se envía el formulario
   
    $comentarios = $_POST['comentarios'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $opcion = $_POST['opcion'];
    
    //a que mail se enviara la respuesta del formulario
    $to = "mariano27897@gmail.com";
    //el asunto del formulario
    $email_subject = "Mail desde el formulario";

    //$email_body es el cuerpo del correo electrónico, donde concatenamos los datos del formulario con un mensaje de agradecimiento.
    $email_body = "Respuesta de formulario\n\n";
    $email_body .= "Gracias por comunicarte con nosotros. Hemos recibido la siguiente información:\n\n";
    $email_body .= "Nombre del usuario: " . $nombre . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Comentarios: " . $comentarios . "\n";

    $headers = "From: $email\n";

    mail($to, $email_subject, $email_body, $headers);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Respuesta de formulario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Respuesta de formulario</h1>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
      <p>Gracias por comunicarte con nosotros. Hemos recibido la siguiente información:</p>
      <p><strong>Nombre del usuario:</strong> <?php echo $nombre; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Comentarios:</strong> <?php echo $comentarios; ?></p>
    <?php else : ?>
      <p>No se ha enviado ningún formulario.</p>
    <?php endif; ?>
  </div>
</body>
</html>