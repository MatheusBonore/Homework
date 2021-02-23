<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '[SEU EMAIL AQUI]';
    $mail->Password = '[SUA SENHA AQUI]';
    $mail->Port = 587;

    $mail->setFrom('[EMAIL QUE SERIA ENVIADO]');
    $mail->addAddress('[EMAIL PARA QUEM SERA ENVIADO]');

    $mail->isHTML(true);
    $mail->Subject = 'Teste de email';
    $mail->Body = 'Chegou email teste do <strong>Matheus</strong>';
    $mail->AltBody = 'Chegou email teste do Matheus';

    if ($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email não enviado';
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
