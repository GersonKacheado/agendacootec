<?php
include_once("sistema/classes_principais/validar.php");
$validar = new VALIDAR;
$validar->ValidarPrtcls(base64_decode($_REQUEST['id']));
#echo $validar->valid();
#echo  base64_decode ($validar->valid());
$script = "http://www.defensoria.ap.def.br/valid/".$validar->valid()."";
header("Location: $script");
?>
