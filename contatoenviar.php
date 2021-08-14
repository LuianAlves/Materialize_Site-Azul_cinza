<?php

// Recebendo dados do formulário

$name = $_POST['name'];

$email = $_POST['email'];

$telefone = $_POST['telefone'];

$cep = $_POST['cep'];

$message = $_POST['message'];



$subject = 'Contato Site';

$headers = "Content-Type: text/html; charset=utf-8\r\n";

$headers .= "From: $email\r\n";

$headers .= "Reply-To: $email\r\n";



// Dados que serão enviados

$corpo .= "Nome: " . $name . " <br>";

$corpo .= "Email: " . $email . " <br>";

$corpo .= "Telefone: " . $telefone . " <br>";

$corpo .= "CEP: " . $cep . " <br>";

$corpo .= "Mensagem: " . $message . " <br>";





// Email que receberá a mensagem (Não se esqueça de substituir)

$email_to = 'suporte@luianalves.com.br';

$email_from = ['$email'];

// Enviando email

$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);



if ($status):

  // Enviada com sucesso

  header('location:index.php?status=sucesso');

else:

  // Se der erro

  header('location:index.php?status=erro');

endif;

?>