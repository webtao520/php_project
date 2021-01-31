<?php
interface SendMailInterface
{
    public function setSendToEmailAddress($emailAddress);
    public function setSubjectName($subject);
    public function setTheEmailContents($body);
    public function setTheHeaders($headers);
    public function getTheHeaders();
    public function getTheHeadersText();
    public function sendTheEmailNow();
}

class SendMail implements SendMailInterface
{
    public $to, $subject, $body;
    public $headers = array();

    public function setSendToEmailAddress($emailAddress)
    {
        $this->to = $emailAddress;
    }

    public function setSubjectName($subject)
    {
        $this->subject = $subject;
    }

    public function setTheEmailContents($body)
    {
        $this->body = $body;
    }

    public function setTheHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getTheHeaders()
    {
        return $this->headers;
    }

    public function getTheHeadersText()
    {
        $headers = "";
        foreach ($this->getTheHeaders() as $header) {
            $headers .= $header . "\r\n";
        }
    }

    public function sendTheEmailNow()
    {
        mail($this->to, $this->subject, $this->body, $this->getTheHeadersText());
    }
}
// 未加外观模式
//$to='';
//$subject='';
//$body="";
//$headers='';
//$sendMail = new SendMail();
//$sendMail->setSendToEmailAddress($to);
//$sendMail->setSubjectName($subject);
//$sendMail->setTheEmailContents($body);
//$sendMail->setTheHeaders($headers);
//$sendMail->sendTheEmailNow();

