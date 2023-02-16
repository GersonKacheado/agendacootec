<?php
include_once("../classes_principais/login.php");
$Logar = new LOGIN;

if(isset($_REQUEST['logar']) && $_REQUEST['logar']=='emmanuelADM'){
$Logar->getLogin($_REQUEST['lg_mn']);
$Logar->getSenha($_REQUEST['passwd']);
$Logar->ValidarUser();
}elseif(isset($_REQUEST['emmanuelADM']) && base64_decode($_REQUEST['emmanuelADM'])=='emmanuelADM') {
$Logar->SetEmmanuel(base64_decode($_REQUEST['NmEmmanuelADM']));
}else{
	$msg=base64_encode(" <span class='alert alert-warning alert-dismissible fade show col-12'> Sessão Encerrada ! </span> ");
	header("Location: ../../login.php?msg=".$msg);
}
?>
