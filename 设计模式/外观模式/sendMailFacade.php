<?php
require_once("./email.php");

class   SendMailFacade
{
    private $sendMail;

    public function __construct(SendMailInterface $sendMail) //  依赖注入
    {
        $this->sendMail = $sendMail;
    }

    public function setTo($to)
    {
        $this->sendMail->setSendToEmailAddress($to);
        return $this;
    }

    public function setSubject($to)
    {
        $this->sendMail->setSendToEmailAddress($to);
        return $this;
    }

    public function setBody($body)
    {
        $this->sendMail->setTheEmailContents($body);
        return $this;
    }

    public function setHeaders($headers)
    {
        $this->sendMail->setTheHeaders($headers);
        return $this;
    }

    public function send()
    {
        $this->sendMail->sendTheEmailNow();
    }
}

$to="";
$subject="";
$body="";
$headers="";

$sendMail       = new SendMail();
$sendMailFacade = new sendMailFacade($sendMail);
$sendMailFacade->setTo($to)->setSubject($subject)->setBody($body)->setHeaders($headers)->send();