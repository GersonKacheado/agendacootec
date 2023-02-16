<?php
function explodePrtcl($id){
	$id = explode("-", $id);
	$id = explode(".", $id[0]);
	return @$id['3'];
  }


	include_once("../classes_principais/sql.php");
	include_once("../classes_principais/fileArq.php");
	include_once("selecionarDados.php");
	$objPCD = NEW SQL;
	$objSelect = NEW SELECIONARDADOSAJAX;
	$objUpdc = NEW UPLOADSDOC;
session_start();
define("STRUSERNMADM", $_SESSION['STRUSERNMADM']);

if(isset($_POST['criaPagina'])){
	$link = "MTU=";
	$nmpgn = "QWRtaW5pc3RyYXRpdm8=";
	echo $nmlinkPagina = $_POST['nmlinkPagina']; echo '<br>';
	echo $nmPagina = $_POST['nmPagina']; echo '<br>';
	echo $nmIconPagina = $_POST['nmIconPagina']; echo '<br>';
	echo $hbltPagina = $_POST['hbltPagina']; echo '<br>';
	echo $subMnPagina = $_POST['subMnPagina']; echo '<br>';
		
		$criaPagina = NEW SQL;
		$criaPagina->setTabela("`tbl_paginas`");
		$criaPagina->setColunas("`id_pgns`, `nm_link`, `nm_pgn`, `nm_icon`, `hbltd`, `sub_menu`");	
		$criaPagina->setValues("null,'".$nmlinkPagina."','".$nmPagina."','".$nmIconPagina."','".$hbltPagina."','".$subMnPagina."'");	
		$criaPagina->insert();
		

	echo	$msg =  "  <span class='alert alert-success alert-dismissible fade show col-12'> TEMPLATE CRIADO COM SUCESSO </span> ";
		@header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg));
	}

if (isset($_POST['cad_servdpe'])) {
	$link = "MTU=";
	$nmpgn = "QWRtaW5pc3RyYXRpdm8=";
$nm  = $_POST['nm_usr'];
$email = $_POST['email_user'];
$cpf = $_POST['lgn'];
$senha = $_POST['snh'];
$nivel = $_POST['nivel'];
$cad_ext = NEW SQL;
$cad_ext->setTabela("`tbl_usr`");
$cad_ext->setColunas("`id_usr`, `lgn`, `snh`, `lg_mn`, `img_usr`, `email_user`, `nm_usr`, `fk_grp_usr`");
$cad_ext->setValues("null,'".$cpf."','".$senha."',LOWER(concat( substring_index('".$nm."', ' ', 1),'.',substring_index('".$nm."', ' ', -1) )),0,'".$email."','".$nm."','".$nivel."'");
$cad_ext->insert();
$msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> SERVIDOR REGISTRADO COM SUCESSO </span> ";
//@header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg));
@header("Location: ../../?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listUser=1"."&msg=".base64_encode($msg));
}

/*Editar dados senha/email*/
if(!is_null(@$_POST['editar_user'])){
	$idusr = $_POST['idusr'];
	$link = $_POST['link'];
	$nmpgn = $_POST['nmpgn'];
	echo $senha = $_POST['senha'];
	$objSelect->selectALterSenha($idusr, $senha);
	$senha = $objSelect->getSenha();
	$email = $_POST['email'];
	$objPCD->setTabela("`tbl_usr`");
	$objPCD->setValuesTbl("`snh` = '".$senha."', `email_user` = '".$email."'");
	$objPCD->setIdDados("`id_usr`");
	$objPCD->setIdValues("$idusr");
	$objPCD->alterar();
	 $msg =  " <span class='alert alert-success alert-dismissible fade show col-12'> Dados Atualizados! </span> ";
	 header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg)."");
	}

//atualizar foto de perfil
if(!is_null(@$_POST['edit_img_user']) && $_FILES){
	$idusr = $_POST['idusr']; echo '<br>';
	$link = 'MTM='; echo '<br>';
	$nmpgn = 'ZWRpdGFyIGRhZG9zIHVzdcOhcmlv'; echo '<br>';
	$imagem = $_POST['img']; echo '<br>';

$nmDir  = "../../tmpt/dist/img/"; /*Diretorio que vai criar a pasta*/
$nm_arq = $idusr; // novo nome do arquivo
$filephp = $_FILES;  /*entrada $_FILE**/
$nameinput =  "img"; /*nome do input*/
$extension = "'.jpg','.bmp','.jpeg', '.png'"; /*TIPO do arquivo*/

$objUpdc->uploadArq($nmDir , $nm_arq , $filephp , $nameinput, $extension );
if($objUpdc->status()==true){
	$objPCD->setTabela("`tbl_usr`");
	$objPCD->setValuesTbl("`img_usr` = '".$idusr."'");
	$objPCD->setIdDados("`id_usr`");
	$objPCD->setIdValues("$idusr");
	$objPCD->alterar();
echo $msg =  "<span  class='alert alert-success alert-dismissible fade show col-12'> Arquivo atualizado com sucesso. </span>";
}elseif($objUpdc->status()==false){
echo $msg =  "<span  class='alert alert-warning alert-dismissible fade show col-12'> Erro: insira uma arquivo valido! </span>";
}
	 @header("Location: ../../?link=".$link."&nmpgn=".$nmpgn."&msg=".base64_encode($msg)."");
	}


?>
