<?php

require 'PHPMailer/class.phpmailer.php';
ini_set('memory_limit', '256M');
error_reporting(E_ALL);
setlocale(LC_ALL,"es_ES");

session_start();
if ($_SESSION['answer'] == $_POST['answer'] ) {

    $sendToEmail = 'victor.m.recio83@gmail.com';
    $subject = 'Nuevo Mensaje Formulario de Contacto';
    $fields = array('name' => 'Nombre', 'surname' => 'Apellidos', 'phone' => 'Teléfono', 'email' => 'Email', 'message' => 'Mensaje');

    $okMessage = 'Formulario de contacto enviado correctamente. Gracias, Te responderé lo más pronto que me sea posible!';
    $errorMessage = 'Hay algún tipo de Error al mandar el formulario de contacto. Por favor, inténtalo más tarde';

    try
    {
        
        $emailTextHtml = "<h1>Tienes un nuevo Formulario de Contacto</h1><hr>";
        $emailTextHtml .= "<table>";

        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
            }
        }
        $emailTextHtml .= "</table><hr>";
        $emailTextHtml .= "<p>Que tengas un buen día!!!<br></p>";
        
        if(!sendmail($sendToEmail, $subject, $emailTextHtml)) {
            throw new \Exception('No es posible mandar el Email.');
        }

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
    catch (\Exception $e)
    {
        $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

}
else {
    $responseArray = array('type' => 'danger', 'message' => 'Captcha Incorrecto.');
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}

function sendmail($email, $subject, $body) {

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    try {
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->Username = 'reports.sum@gmail.com';
        $mail->Password = 'wUOj5LePRWijlGYnJr07';
        $mail->AddReplyTo('reports.sum@gmail.com', '');

        $mail->AddAddress($email);

        $mail->SetFrom('reports.sum@gmail.com', '');
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        return $mail->Send();
    } catch (phpmailerException $e) {
        return $e->errorMessage();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}