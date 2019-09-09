<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $mensagem = $_POST['mensagem'];

 require_once("Exception.php");
 require_once("PHPMailer.php");
 require_once("SMTP.php");

 $mail = new PHPMailer();

 //$mail->SMTPDebug = 2;
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = 587;
 $mail->SMTPSecure = 'tls';
 $mail->SMTPAuth = true;
 $mail->Username = "fabio.evangelion.guitar@gmail.com";
 $mail->Password = "guitarra454749";

 $mail->setFrom("fabio.evangelion.guitar@gmail.com", "Alura Curso PHP e MySQL");
 $mail->addAddress("fabio.evangelion.guitar@gmail.com");
 $mail->Subject = "Email de contato da loja";
 $mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
 $mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

 if($mail->send()){
 	$_SESSION["success"] = "Mensagem enviada com sucesso";
 	header("Location: index.php");
 }else{
 	$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
 	header("Location: contato.php");
 }

 Die();