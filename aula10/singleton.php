<?php

// $email =  new EmailSender(); //não é valido em classe Singleton (classe de unica instância)

class EmailSender {
    private static $instance = null;
    private $mailer;

    // Impedir instânciação fora da classe
    private function __construct() {
        // Suponha que estamos usando PHPMailer ou similar:
        $this->mailer = new PHPMailer();
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.example.com';  
        $this->mailer->SMTPAuth = true;   
        $this->mailer->Username = 'username@example.com';   
        $this->mailer->Password = 'your_password';  
        // ... outras configurações ...
    }

    // Método para acessar o Singleton
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new EmailSender(); // consigo utilizar construtor privado somente dentro da própria classe
        }
        return self::$instance;
    }

    public function sendEmail($to, $subject, $body) {
        $this->mailer->setFrom('from@example.com', 'Sender Name');
        $this->mailer->addAddress($to);   
        $this->mailer->Subject = $subject;
        $this->mailer->Body = $body;
        
        if(!$this->mailer->send()) {
            echo 'Erro ao enviar email. ' . $this->mailer->ErrorInfo;
        } else {
            echo 'Email enviado!';
        }
    }
}

// Uso:

$sender = EmailSender::getInstance();
$sender->sendEmail('receiver@example.com', 'Test Subject', 'Hello, this is a test email!');

$sender2 = EmailSender::getInstance();
$sender2->sendEmail('receiver2@example.com', 'Test Subject', 'Hello, this is a test email!');

EmailSender::getInstance()->sendEmail('receiver@example.com', 'Test Subject', 'Hello, this is a test email!');
EmailSender::getInstance()->sendEmail('receiver2@example.com', 'Test Subject', 'Hello, this is a test email!');
