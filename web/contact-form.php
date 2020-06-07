<?php

// require 'PHPMailer/PHPMailerAutoload.php';

require 'PHPMailer/class.phpmailer.php';
ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', true);
setlocale(LC_ALL,"es_ES");

session_start();
if ($_SESSION['answer'] == $_POST['answer'] ) {

    $fromEmail = 'reports.sum@gmail.com';
    $fromName = 'Web Victor M. Recio';
    $sendToEmail = 'victor.m.recio83@gmail.com';
    $subject = 'Nuevo Mensaje Formulario de Contacto';
    $fields = array('name' => 'Nombre', 'surname' => 'Apellidos', 'phone' => 'Teléfono', 'email' => 'Email', 'message' => 'Mensaje');


    $okMessage = 'Formulario de contacto enviado correctamente. Gracias, Te responderé lo más pronto que me sea posible!';
    $errorMessage = 'Hay algún tipo de Error al mandar el formulario de contacto. Por favor, inténtalo más tarde';

    // if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
    error_reporting(E_ALL);

    try
    {
        
        // if(count($_POST) == 0) throw new \Exception('Form is empty');
        
        $emailTextHtml = "<h1>Tienes un nuevo Formulario de Contacto</h1><hr>";
        $emailTextHtml .= "<table>";

        foreach ($_POST as $key => $value) {
            // If the field exists in the $fields array, include it in the email
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
        // $responseArray = array('type' => 'danger', 'message' => $errorMessage);
        $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
    }

}
else {
    $responseArray = array('type' => 'danger', 'message' => 'Captcha Incorrecto.');
}

// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
// else just display the message
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