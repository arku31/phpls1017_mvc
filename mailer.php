<?php
require_once __DIR__."/vendor/autoload.php";

class Mailer
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer;

        $this->mail->IsSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->Host = "smtp.mail.ru";
        $this->mail->Username = "sadasddddddddddddddd111@mail.ru";
        $this->mail->Password = 'qwerty1234';
        $this->mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 465;                                    // TCP port to connect to

        $this->mail->setFrom('sadasddddddddddddddd111@mail.ru', 'E-mail с сайта');
        $this->mail->addAddress('itvrd2@yandex.ru', 'Получатель');     // Add a recipient
        $this->mail->addCC('0121mymail@gmail.com');
        $this->mail->addAttachment('composer.json');
        $this->mail->addReplyTo('sadasddddddddddddddd111@mail.ru', 'Robot');
        $this->mail->CharSet = 'UTF-8';
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = 'Письмо с сайта ' . date('d.m.Y H:i:s', time());
    }

    public function setMessage($message)
    {
        $this->mail->Body    = $message;
        $this->mail->AltBody = $message;
    }

    public function send()
    {
        $this->mail->send();
    }
}


$mailer = new Mailer();
$mailer->setMessage('Что будем отправлять');
$mailer->send();
