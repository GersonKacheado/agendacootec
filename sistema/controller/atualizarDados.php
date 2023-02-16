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
?>
