<?php

$link = @$_REQUEST['link'];
$nmpgn = @$_REQUEST['nmpgn']; 

include_once("sistema/configuracoes/conf.php");
include_once("includes/head.php");
include_once("includes/tp.php");
include_once("includes/menuesq.php");

    $trcLink = NEW URL;
    $trcLink->link(@$_REQUEST['link']);

include_once("includes/footer.php");
?>


