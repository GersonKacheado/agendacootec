<?php
include_once("../classes_principais/conn.php");
class SELECIONARDADOSAJAX extends CONN
{
  
 
  function getSenha(){
      return $this->senha;
  } 
  function selectALterSenha($id, $snh){
    $sql = "SELECT * from tbl_usr WHERE id_usr = '".$id."'";
    self::execute($sql);
    while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
       $this->senha = ($resultado->snh==$snh) ? $resultado->snh : md5(hash('sha512',$snh));
    }
  }
  function selectSenha($idusr,$snh){
     $sql = "SELECT COUNT(`id_usr`) AS 'VALIDAR' FROM `tbl_usr` WHERE `id_usr` = $idusr  AND  `snh` = '".md5(hash('sha512',$snh))."' ";
     self::execute($sql);
     while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         return  $resultado->VALIDAR;
     }
   } 
   function selectSenhaMult($idusr,$snh){
     $sql = "SELECT COUNT(`id_usr`) AS 'VALIDAR' FROM `tbl_usr` WHERE `id_usr` = $idusr  AND  `snh` = '".md5(hash('sha512',$snh))."' ";
     self::execute($sql);
     while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         return  $resultado->VALIDAR;
     }
   } 
   function selectIncAnexos(){

    $sql = "SELECT COUNT(id_anxs) as INCREMENTO FROM `tbl_anxs`";
     self::execute($sql);
     while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         return  $resultado->INCREMENTO;
     }
   } 
   
   
}
?>  