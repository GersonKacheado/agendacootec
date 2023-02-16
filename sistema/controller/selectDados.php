<?php

use Mpdf\Tag\Span;

include_once("sistema/includes/style/csspdf.css.php");
include_once("sistema/classes_principais/conn.php");
include_once('sistema/qr/qrconf.php');
class SELECIONARDADOS extends CONN
{
   public  $iddc,$ds_dc,$dec_ass, $selected_tp_prc, $selected_tp_dest, $nmSrt, $max, $DocTp,$v, $CodeQR, $img, $validar,$dados;
   public $site = "www.defensoria.ap.def.br";
   public $siteValid = "www.dpe1.ap.def.br/protocolo/";


  function getimg(){
    return $this->img;
}
function getValidar(){
  return $this->validar;
}

function selectimg($id){
    $sql = "SELECT * FROM `tbl_usr` WHERE id_usr = '".$id."'";
    self::execute($sql);
    while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         $this->img = $resultado->img_usr;
        }
  }



function SetEditarUSer($id){
  $sql = "SELECT * FROM `tbl_usr` WHERE id_usr = '".$id."'";
  self::execute($sql);
  while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
    echo "          
      <div class='form-group row'>
        <label class='col-sm-3 col-form-label text-secondary'> SENHA: </label>
        <div class='col-sm-12 input-group-sm'>
          <input type='password' name='senha' class='form-control' id='' value='".$resultado->snh."' required>
          <span class='text-sm'><p class='text-right'> <i class='fas fa-exclamation-triangle'></i> Digite pelo menos 8 caracters alfanumérico.</p> </span>
        </div>
      </div>
      <div class='form-group row'>
        <label class='col-sm-3 col-form-label text-secondary'> EMAIL: </label>
        <div class='col-sm-12 input-group-sm'>
          <input type='email' name='email' class='form-control' id='' value='".$resultado->email_user."' required>
        </div>
      </div>                 
         ";
        }
  }


function contaUserDpe(){
  $sql = "SELECT COUNT(id_usr) as userdpe FROM `tbl_usr`";
  self::execute($sql);
  while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)){
    echo "
$resultado->userdpe
    ";
  }
}
function contaPaginas(){
  $sql = "SELECT COUNT(id_pgns) as pages FROM `tbl_paginas`";
  self::execute($sql);
  while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)){
    echo "
$resultado->pages
    ";
  }
}



function listPaginas(){
  $sql = "SELECT * FROM `tbl_paginas` WHERE `status` = 0 ORDER BY `tbl_paginas`.`id_pgns` ASC";
self::execute($sql);
while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)){
  echo " 
  <tr>
  <td>$resultado->id_pgns</td>
  <td>$resultado->nm_link</td>
  <td>$resultado->nm_pgn</td>
  <td>$resultado->nm_icon</td>
  <td>$resultado->hbltd</td>
  <td>$resultado->sub_menu</td>
  <td> <a class='btn btn-outline-warning elevation-1 btn-sm m-1' title='EDITAR REGISTRO' data-toggle='modal' data-target='.bd-example-modal-lg".$resultado->id_pgns."'>EDITAR</a>
  <a type='button' class='btn btn-outline-danger elevation-1 btn-sm' title='APAGAR REGISTRO' data-toggle='modal' data-target='.bd-example-modal-sm".$resultado->id_pgns."'>EXCLUIR</a>
  </tr>

  <div class='modal fade bd-example-modal-lg".$resultado->id_pgns."' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
    <div class='card-body'>
    <div class='card-header'>
    
    <div class='float-right'>
    <a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-default text-uppercase btn-sm'><i class='fa fa-window-close'></i></a>
    </div>
    <h3 class='card-title text-uppercase'> <i class='fas fa-user'></i> <strong> Gerenciamento de Dados Cadastrais $resultado->id_pgns </strong></h3>
  </div>
  
    <form method='POST' action='sistema/controller/atualizarDados.php'> 
    <input type='hidden' name='id_pagina' class='form-control' id='inputPassword' value='".$resultado->id_pgns."'>
  
    <div class='form-group row'>
    <label for='inputPassword' class='col-sm-2 col-form-label'>LINK</label>
    <div class='col-sm-10'>
      <input type='text' class='form-control' id='inputPassword' value='$resultado->nm_link'>
    </div>
  </div>  <div class='form-group row'>
  <label for='inputPassword' class='col-sm-2 col-form-label'>NOME</label>
  <div class='col-sm-10'>
  <input type='text' name='nmPagina' class='form-control' id='inputPassword' value='$resultado->nm_pgn'>
  </div>
  </div>  <div class='form-group row'>
  <label for='inputPassword' class='col-sm-2 col-form-label'>ICONE</label>
  <div class='col-sm-10'>
  <input type='text' name='iconPagina' class='form-control' id='inputPassword' value='$resultado->nm_icon'>
  </div>
  </div>  
  <div class='form-group row'>
  <label for='inputPassword' class='col-sm-2 col-form-label'>HABILITADO</label>
  <div class='col-sm-10'>

  
  <input type='text' name='hbltPagina' class='form-control' id='inputPassword'value='$resultado->hbltd'>
  </div>
  </div>
  <div class='form-group row'>
  <label for='inputPassword' class='col-sm-2 col-form-label'>SUBMENU</label>
  <div class='col-sm-10'>
  <input type='text' name='subPagina' class='form-control' id='inputPassword'value='$resultado->sub_menu'>
  </div>
  </div>  
  <div class='card-footer'>
  <div class='float-right'>
  <a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&criaPagina=' class='btn btn-danger text-uppercase btn-sm'>cancelar</i></a>
  </div>
  <button type='submit' name='updtPagina' class='btn btn-success btn-sm'> <i class='fas fa-check-double'></i> ENVIAR </button>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div> 
  
  <div class='modal fade bd-example-modal-sm".$resultado->id_pgns."' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>
    <form method='POST' action='sistema/controller/atualizarDados.php'> 
    <h6 class='text-center'> Deseja realmente excluir o item - <strong> ".$resultado->nm_pgn." </strong>?</h6>
    <input type='hidden' name='id_pagina' class='form-control' id='inputPassword' value='".$resultado->id_pgns."'>
    <input type='hidden' name='sttspgn' class='form-control' id='inputPassword' value='1'>

    <div class='card-footer'>
    <button type='submit' name='exclPagina' class='btn btn-success btn-sm'>CONFIRMAR EXCLUSÃO</button>
    <a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&criaPagina=' class='btn btn-danger text-uppercase btn-sm'>cancelar</i></a>
    </div>
    </form>
    </div>
  </div>
</div>
  ";}
}


function listUserDpe(){
  $sql = "SELECT * FROM `tbl_usr` ORDER BY `id_usr`  DESC";
  self::execute($sql);
  while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)){
    echo "
        <tr>                
        <td>$resultado->id_usr</td>
        <td>$resultado->nm_usr</td>
        <td>$resultado->lgn</td>
        <td>$resultado->lg_mn</td>
        <td>$resultado->email_user</td>
        <td>$resultado->fk_grp_usr</td>
        <td><a class='btn btn-warning small-box-footer m-1' title='EDITAR REGISTRO' data-toggle='modal' data-target='.bd-example-modal-lg".$resultado->id_usr."'><i class='fas fa-pen'></i></a></td>
        </tr>
       
        <div class='modal fade bd-example-modal-lg".$resultado->id_usr."' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
          <div class='modal-content'>
          <div class='card-body'>
          <div class='card-header'>
          <div class='float-right'>
          <a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-default text-uppercase btn-sm'><i class='fa fa-window-close'></i></a>
          </div>
          <h3 class='card-title text-uppercase'> <i class='fas fa-user'></i> <strong> Gerenciamento de Dados Cadastrais </strong></h3>
        </div>

          <form method='POST' action='sistema/controller/atualizarDados.php'> 
          <input type='hidden' name='id_usr' class='form-control' id='inputPassword' value='".$resultado->id_usr."' >

          <div class='form-group row'>
          <label for='inputPassword' class='col-sm-2 col-form-label'>NOME</label>
          <div class='col-sm-10'>
            <input type='text' name='nm_usr' class='form-control' id='inputPassword' value='$resultado->nm_usr' >
          </div>
        </div>  <div class='form-group row'>
        <label for='inputPassword' class='col-sm-2 col-form-label'>LOGIN</label>
        <div class='col-sm-10'>
          <input type='text' name='lg_mn' class='form-control' id='inputPassword' value='$resultado->lg_mn'>
        </div>
      </div>  <div class='form-group row'>
      <label for='inputPassword' class='col-sm-2 col-form-label'>CPF</label>
      <div class='col-sm-10'>
        <input type='text' id='cpf' name='lgn' class='form-control' id='inputPassword' value='$resultado->lgn'>
      </div>
    </div>  
    <div class='form-group row'>
    <label for='inputPassword' class='col-sm-2 col-form-label'>EMAIL</label>
    <div class='col-sm-10'>
      <input type='text' name='email_user' class='form-control' id='inputPassword'value='$resultado->email_user'>
    </div>
  </div>  
  <div class='form-group row'>
  <label for='inputPassword' class='col-sm-2 col-form-label'>NIVEL DE ACESSO</label>
  <div class='col-sm-10'>
    <input type='text' name='nivel' class='form-control' id='inputPassword'value='$resultado->fk_grp_usr'>
  </div>
</div>  

  <div class='form-group row'>
<label for='inputPassword' class='col-sm-2 col-form-label'>SENHA</label>
<div class='col-sm-10'>
  <input type='text' name='snh' required class='form-control' id='inputPassword'>
</div>
</div>
<div class='card-footer'>
    <div class='float-right'>
    <a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-danger text-uppercase btn-sm'>cancelar</i></a>
    </div>
    <button type='submit' name='updatUser' class='btn btn-success btn-sm'> <i class='fas fa-check-double'></i> ENVIAR </button>
  </div>
</div>

          </form>

</div>
          </div>
        </div>
      </div>
      
       
    ";
  }
}


  function selectlink($id_grp){
    $sql = "SELECT *  FROM `VIEW_SEL_GRUP_PERMITIR` WHERE hbltd = 0 AND `stts_url_grp` = 0 AND `id_grp` = 1  GROUP BY  id_pgns ORDER by id_pgns DESC";
    self::execute($sql);
    while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
          echo "
          <li class='nav-item'>
          <a href='?link=".base64_encode($resultado->id_pgns)."&nmpgn=".base64_encode($resultado->nm_pgn)."' title='".$resultado->nm_pgn."' class='nav-link'>
            <i class='fa ".$resultado->nm_icon." text-secondary'></i>
            <p>
            ".$resultado->nm_pgn."
              <span class='right badge badge-danger invisible'>New</span>
            </p>
          </a>
        </li>
          ";
        }
    }

function selectBuscAltUser(){
      $sql = "SELECT * FROM tbl_usr WHERE id_usr<>1";
      self::execute($sql);
      while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         echo"
            <tr class='text-uppercase'>
                  <td class='text-center'>".$resultado->lgn."</td>
                  <td class='text-center'>".$resultado->nm_usr."</td>
                  <td class='text-center'>".$resultado->email_user."</td>
                  <td class='text-center'>".$resultado->lg_mn."</td>
                  <td class='text-center'>
                  <a href='' >
                  <button type='button' class='btn btn-secondary'><i class='fa fa-eye' aria-hidden='true'></i></button></a>
                  </td>
            </tr>
        ";
      }
    }

    function selectNivelacesso(){
      $sql = "SELECT * FROM `tbl_grp`";
      self::execute($sql);
      while($resultado = $this->stmt->fetch(PDO::FETCH_OBJ)) {
         echo"
           <option value='$resultado->id_grp'>$resultado->nm_grp</option>
        ";
      }
    }
  } ?>


