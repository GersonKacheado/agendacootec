<?php
include_once('conn.php');
class URL extends CONN
{
	private $link,$nome;
	private function buscaLink($id){
		$sql = 'SELECT * FROM `tbl_paginas` where id_pgns = '.$id;
		self::execute($sql);
		while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
	           $this->url =	$resultado->nm_link;
	           $this->nome =	$resultado->nm_pgn;
	  	 }	
	}
	public function link($url)
	{
		if (!isset($url)) {
			$this->link = "pg_hm";
		} else {
			self::buscaLink(base64_decode($url));
			$this->link = $this->url;
		}
		$this->link = "views/".$this->link.".php";
		if (file_exists($this->link)) {
    			include_once("$this->link");	
		} else {
    		echo "<h3>erro 404: Entre em contado com os Administradores do Sistema</h3>";
			$arquivo = fopen("$this->link",'w');
			$texto = 						
"
<div class='wrapper'>
  <div class='content-wrapper'>
    <div class='content-header'>
      <div class='container-fluid'>
        <div class='row mb-2'>
          <div class='col-sm-6'>
            <h1 class='m-0 text-dark'>Dashboard v2</h1>
          </div>
          <div class='col-sm-6'>
            <ol class='breadcrumb float-sm-right'>
              <li class='breadcrumb-item'><a href='#'>Home</a></li>
              <li class='breadcrumb-item active'>Dashboard v2</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class='content'>
      <div class='container-fluid'>
        <div class='row'>
        <p>gerson </p>
        </div>
      </div>
    </section>
  </div>
</div>

";
	  
			fwrite($arquivo, $texto);
			fclose($arquivo);
			
		}

	
	
	}
}


 ?>