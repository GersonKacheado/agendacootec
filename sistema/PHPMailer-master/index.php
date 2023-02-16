<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
 class Name 
 {
    protected $emailRemet,$emailDest, $senha, $head, $body,$bodyHtml,$msg;
      public function setDestinatarioEmail($emailDest){
            $this->emailDest = $emailDest;
      }  
      public function setSenha($senha){
            $this->senha = $senha;
      }  
      public function setRemetenteEmail($emailRemet){
            $this->emailRemet = $emailRemet;
      } 
       public function setHeadEmail($head){
            $this->head = $head;
      }
      public function setBodyEmailHtml($body){
            $this->body = $body;
      } 
      public function setBodyEmail($body){
            $this->bodyHtml = $body;
      }  
      public function getMsg(){
        return $this->msg;
      }
      public function email(){
            $mail = new PHPMailer(true);
             try {
               	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $this->emailRemet; //login
                $mail->Password = $this->senha; // senha
                $mail->Port = 587;

             
                $mail->setFrom($this->emailRemet); // ORIGEM
                $mail->addAddress($this->emailDest); //destino
             
                $mail->isHTML(true);
                $mail->Subject = $this->head;
                $mail->Body = $this->body;
                $mail->AltBody = $this->bodyHtml;
             
                if($mail->send()) {
                    $this->msg =  'E-mail enviado com sucesso';
                } else {
                    $this->msg =  'E-mail nao enviado';
                }
            } catch (Exception $e) {
                $this->msg = "Erro ao enviar mensagem: {$mail->ErrorInfo}";
            }

     }
 }


$pbj = new Name;
$pbj->setRemetenteEmail('ti.dpeap@gmail.com');
$pbj->setSenha('T1.dp34p');




$msg = base64_decode($_REQUEST['msg']);
$vld = base64_decode($_REQUEST['vld']);
$nm = strtolower(base64_decode($_REQUEST['nm']));
$nm = explode(" ",$nm);
$Mint = intval(count($nm));
$login = $nm[0].".".$nm[$Mint-1];
$email = base64_decode($_REQUEST['email']);
$s = base64_decode($_REQUEST['s']);


$pbj->setDestinatarioEmail("$email");
$pbj->setHeadEmail("Validar dados - DPE-AP");


if ($vld==true) {
$pbj->setBodyEmailHtml("Recebemos um pedido ".base64_decode($_REQUEST['nm'])." para redefiner suas credencias de acesso <br> ao Protocolo da DPE-AP, Click no link para Validar sua entrada.
    <p>Seu login: <b>".$login."</b> <br> Sua senha: <b>".$s."</b></p>
    <b>http://dpe1.ap.def.br/protocolo/login.php?v=".base64_encode('emmanuelDiasPEREIRA_PROTOCOLOdpe')."&p=".base64_encode($s)."&lg=".base64_encode($login)."&v1=".base64_encode(true)."</b>");    
}else if ($vld==false) {
$pbj->setBodyEmailHtml("Recebemos um pedido para redefiner suas credencias de acesso <br> ao Protocolo da DPE-AP, Entre em contato com a equipe de TI algo deu errado.<br><b>");    
}
$pbj->setBodyEmail("body sem HTML");
$pbj->email();
$msg = $pbj->getMsg();
$msg = base64_encode("<div class='alert alert-success' role='alert'>".$nm.",".$msg.".<br>Abra seu e-mail para validar seus cadastro<div>");
//    @header("Location: ../../login.php?msg=".$msg."");
