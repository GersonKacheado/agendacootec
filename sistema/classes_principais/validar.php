<?php 
include_once("conn.php");
class VALIDAR extends CONN
{
	public $valid;
function explodePrtcl($id){
  $id = explode("-", $id);
  $id = explode(".", $id[0]);
  return @$id['3'];
}
function valid(){
  return $this->valid;
}
function ValidarPrtcls($id){
      $idp = self::explodePrtcl($id);
      $sql = "SELECT count(fk_prtcl) as VALIDAR FROM `VIEW_SEL_IDDC` where fk_prtcl = '".$idp."')";
      self::execute($sql);
      while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) { 
           $validar = ($resultado->Valid) ? "TRUE" : "FALSE";
           $this->valid =  base64_encode($validar);
  } 
}

}

?>