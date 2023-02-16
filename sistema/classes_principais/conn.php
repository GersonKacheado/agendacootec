<?php

	abstract class CONN
	{
		protected $host, $conn, $user,$passwd,$banco,$dbnome,$dsn, $query, $stmt,$porta;
		public function __construct()
		{

			$this->host = '127.0.0.1';
			$this->user = 'root';
		//	$this->passwd = '#..(PL4N3T4)t3rr4..?;';
			$this->passwd = 'Root@1234';
			$this->banco = 'mysql';
			$this->porta = '3306';
			$this->dbnome = 'logldap';
			$this->dsn = $this->banco.":host=".$this->host.";port=".$this->porta.";dbname=".$this->dbnome.";charset=utf8";
			self::conn();
		}
		private function conn()
		{
			try {
				//$this->conn =  new PDO($this->dsn , $this->user , $this->passwd);
				$this->conn = new PDO($this->dsn , $this->user , $this->passwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
    			echo 'error'.$e ; /* div de error */



			}
		}
		protected function execute($sql)
		{
			 $this->stmt = $this->conn->prepare($sql);
    		 return $this->stmt->execute();
		}
		protected function maxRow($tbl,$REGRA){
			$sql = 'SELECT * FROM '.$tbl.' WHERE '.$REGRA.'';
			self::execute($sql);
			return $resultado = $this->stmt->rowCount();
		}

}
?>
