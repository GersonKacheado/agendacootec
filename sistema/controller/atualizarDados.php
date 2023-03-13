<?php
include_once("../classes_principais/sql.php");
include_once("selecionarDados.php");
function explodePrtcl($id){
	$id = explode("-", $id);
	$id = explode(".", $id[0]);
	return @$id['3'];
  }
$obj = new sql;
$objselect = new  SELECIONARDADOSAJAX;


if (isset($_POST['updatUser'])) {
	$link = "MTU=";
	$nmpgn = "QWRtaW5pc3RyYXRpdm8=";
	$gerson = "listUser=1"; 

$id_usr = @$_POST['id_usr'];
 $cpf = $_POST['lgn']; 
 $nm  = $_POST['nm_usr'];
 $email = $_POST['email_user'];
 $senha = $_POST['snh'];
 $lg_mn = $_POST['lg_mn'];
 $nivel = $_POST['nivel'];

$updatUser = NEW SQL;
$updatUser->setTabela("`tbl_usr`");
$updatUser->setValuesTbl("`lgn` = '".$cpf."',`snh` = '".md5(hash('sha512',$senha))."',`lg_mn` = '".$lg_mn."',`email_user` = '".$email."',`nm_usr` = '".$nm."', `fk_grp_usr` = '".$nivel."'");
$updatUser->setIdDados("`id_usr`");
$updatUser->setIdValues("$id_usr");
$updatUser->alterar();
$msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> DADOS ATUALIZADOS COM SUCESSO </span> ";
@header("Location: ../../?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listUser=1"."&msg=".base64_encode($msg));
}
/**atualiza nome pagina */
if (isset($_POST['updtPagina'])) {
	$link = "MTU=";
	$nmpgn = "QWRtaW5pc3RyYXRpdm8=";
echo	$id_pagina = @$_POST['id_pagina']; echo '<br>';
echo $nmPagina = $_POST['nmPagina']; echo '<br>';
echo $iconPagina  = $_POST['iconPagina'];echo '<br>';
echo $hbltPagina = $_POST['hbltPagina'];echo '<br>';
echo $subPagina = $_POST['subPagina'];echo '<br>';
$updtPagina = NEW SQL;
$updtPagina->setTabela("`tbl_paginas`");
//$updatUser->setColunas("`lgn`, `snh`, `lg_mn`, `img_usr`, `email_user`, `nm_usr`, `fk_str`, `fk_grp_usr`");
$updtPagina->setValuesTbl("`nm_pgn` = '".$nmPagina."',`nm_icon` = '".$iconPagina."',`hbltd` = '".$hbltPagina."',`sub_menu` = '".$subPagina."'");
$updtPagina->setIdDados("`id_pgns`");
$updtPagina->setIdValues("$id_pagina");
$updtPagina->alterar();
$msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> DADOS DA PAGINA ATUALIZADOS COM SUCESSO </span> ";
 @header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg));
}

/****exclui(desabilitar) pagina ***/
if (isset($_POST['exclPagina'])) {
	$link = "MTU=";
	$nmpgn = "QWRtaW5pc3RyYXRpdm8=";
echo	$id_pagina = @$_POST['id_pagina']; echo '<br>';
echo $sttsPagina = $_POST['sttspgn']; echo '<br>';
$updtPagina = NEW SQL;
$updtPagina->setTabela("`tbl_paginas`");
$updtPagina->setValuesTbl("`status` = '".$sttsPagina."'");
$updtPagina->setIdDados("`id_pgns`");
$updtPagina->setIdValues("$id_pagina");
$updtPagina->alterar();
$msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> DADOS DA PAGINA REMOVIDOS COM SUCESSO </span> ";
 @header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg));
}
if (isset($_POST['upcad_event'])) {
	$link = "MQ==";
	$nmpgn = "SU7DjUNJTw0K";
	echo $id_evento = $_POST['id_evento']; echo '<br>';
	echo $nmevnt = $_POST['tip_event']; echo '<br>';
	echo $local_event = $_POST['local_event']; echo '<br>';	
	echo $dtevnt = $_POST['dt_event']; echo '<br>';
	echo $dscevrnt = $_POST['desc_event']; echo '<br>';
	echo $hr_inicio = $_POST['hr_inicio']; echo '<br>';
	echo $hr_fim = $_POST['hr_fim']; echo '<br>';	
	echo $stts_evento = $_POST['stts_evento']; echo '<br>';	
$upEvent = NEW SQL;
$upEvent->setTabela("`tbl_eventos`");
$upEvent->setValuesTbl("`id_evento`= '".$id_evento."',`nm_evento`= '".$nmevnt."',`local_event`= '".$local_event."', `dt_evento`= '".$dtevnt."', `hr_evnt_inc`='".$hr_inicio."', `hr_evnt_fim`='".$hr_fim."', `desc_evento`='".$dscevrnt."', `stts_evento`='".$stts_evento."'");
$upEvent->setIdDados("`id_evento`");
$upEvent->setIdValues("$id_evento");
$upEvent->alterar();
$msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> DADOS ATUALIZADOS COM SUCESSO </span> ";
 @header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg));
}
?>
