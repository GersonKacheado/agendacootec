<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if ($_SESSION['STARTADM']==true AND $_SESSION['ADMINADM']=='ADMINADM') {
    define("USERADM", $_SESSION['IDUSERADM']);
    define("USERNMADM", $_SESSION['USERNMADM']);
    define("GRUPO_USERADM", $_SESSION['GRUPO_USERADM']);

include_once("sistema/classes_principais/url.php");
include_once("sistema/controller/selectDados.php");
$objSlct = NEW SELECIONARDADOS;
$link = @$_GET['link'];
$nmpgn = @$_GET['nmpgn']; 

}elseif ($_SESSION['STARTADM']==false AND $_SESSION['ADMINADM']!="ADMINADM") {
header("Location: login.php");
}
?>
