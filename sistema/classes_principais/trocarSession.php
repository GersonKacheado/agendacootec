<?php

include_once("conn.php");
class TROCARSESSION extends CONN
	{

		function selectStor($iduser)
		{
			$sql = "SELECT *  FROM `tbl_usr` INNER JOIN `tbl_strs` ON `id_str` = `fk_str` where id_usr = '".$iduser."'";
				self::execute($sql);
				while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
            	session_start();
				$_SESSION['STARTADM'] = true;
				$_SESSION['IDUSERADM'] = $resultado->id_usr;
				$_SESSION['USERNMADM'] = $resultado->nm_usr;
				$_SESSION['STRUSERNMADM'] = $resultado->fk_str;
				$_SESSION['NMSTRUSERNMADM'] = $resultado->sg_str;
				$_SESSION['GRUPO_USERADM'] = $resultado->fk_grp_usr;


				$msg = base64_encode(" <span class='alert alert-success alert-dismissible fade show col-12'> Seja bem vindo(a)! </span> ");
				header("Location: ../../index.php?msg=".$msg);
			}

		}
		function selectStores($iduser, $idstr)
		{
			$sql = "SELECT * FROM `VIEW_SEL_USR_STRS` where id_usr = '".$iduser."' AND  id_str = '".$idstr."'";
				self::execute($sql);
				while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
            	session_start();
				$_SESSION['STARTADM'] = true;
				$_SESSION['IDUSERADM'] = $resultado->id_usr;
				$_SESSION['USERNMADM'] = $resultado->nm_usr;
				$_SESSION['STRUSERNMADM'] = $resultado->id_str;
				$_SESSION['NMSTRUSERNMADM'] = $resultado->sg_str;
				$_SESSION['GRUPO_USERADM'] = $resultado->fk_grp_usr;


				$msg = base64_encode(" <span class='alert alert-success alert-dismissible fade show col-12'> Seja bem vindo(a)! </span> ");
				header("Location: ../../index.php?msg=".$msg);
			}


		}
	}
?>
