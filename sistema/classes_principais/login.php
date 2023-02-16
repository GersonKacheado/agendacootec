<?php
include_once("conn.php");
class LOGIN extends CONN
{
	private $login, $senha;
	function getSenha($ids)
	{
		$this->senha = md5(hash('sha512', $ids));
	}
	function getLogin($idl)
	{
		$this->login = $idl;
	}
	function buscardados(){
		$sql = "SELECT *  FROM `tbl_usr` WHERE `lg_mn` = '".$this->login."' AND `snh` = '".$this->senha."'";
				self::execute($sql);
				while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
					$sid = md5($resultado->id_usr);
					session_id($sid);				
					session_start();

				$_SESSION['STARTADM'] = true;
				$_SESSION['ADMINADM'] = "ADMINADM";
				$_SESSION['IDUSERADM'] = $resultado->id_usr;
				$_SESSION['USERNMADM'] = $resultado->nm_usr;
				$_SESSION['GRUPO_USERADM'] = $resultado->fk_grp_usr;
				$msg = base64_encode(" <span class='alert alert-success alert-dismissible fade show col-12'> Seja bem vindo! </span> ");
				header("Location: ../../index.php?msg=".$msg);
			}
	}
	function SetEmmanuel($id){
		       	session_start();
				$_SESSION['STARTADM'] = true;
				$_SESSION['ADMINADM'] = "ADMINADM";
				$_SESSION['IDUSERADM'] = $resultado->id_usr;
				$_SESSION['USERNMADM'] = $resultado->nm_usr;
				$_SESSION['GRUPO_USERADM'] = $resultado->fk_grp_usr;
			session_unset();
			session_destroy();

		$msg = base64_encode(" <span class='alert alert-warning alert-dismissible fade show col-12'> Sessão Encerrada !</span> ");
		header("Location: ../../login.php?msg=".$msg);	}
	function ValidarUser(){
	echo	$sql = "SELECT COUNT(`id_usr`) AS VALIDAR FROM `tbl_usr` WHERE `lg_mn` = '".$this->login."' AND `snh` = '".$this->senha."'";
			if (self::execute($sql)) {
				while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
		    	if ($resultado->VALIDAR==1) {
		    		self::buscardados();
		    }else if($resultado->VALIDAR==0){
		    	$msg = base64_encode(" <span class='alert alert-warning alert-dismissible fade show col-12'> Usuário não cadastrado. </span> ");
		    		header("Location: ../../login.php?msg=".$msg);
		    }else if($resultado->VALIDAR > 1){
		    		$msg = base64_encode(" <span class='alert alert-warning alert-dismissible fade show col-12'> COOTEC - DPE-AP </span> ");
		    		header("Location: ../../login.php?msg=".$msg);
		    	}

		    	}
			}

	}


}

?>