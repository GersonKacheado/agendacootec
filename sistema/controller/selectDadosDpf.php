<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if ($_SESSION['START']==true) {
    define("USER", $_SESSION['IDUSER']);
}
include_once("../../style/csspdf.css.php");
include_once("../../../classes_principais/conn.php");
class SELECIONARDADOPDF extends CONN
{

 
}?> 
            