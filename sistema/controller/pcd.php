<?php
include_once("../classes_principais/conn.php");


class PCD extends CONN
{
	
    function startPcd($pcd)
         { 
   echo     $sql = "CALL ".$pcd."";
          if (self::execute($sql)) {$this->msg = true;}
      }
      
}
?>