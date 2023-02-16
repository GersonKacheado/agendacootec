<?php $objSlct = NEW SELECIONARDADOS;?>
 <section class='content'>
      <div class='container' >  
        <div class='row' style='width:100%; margin-left:20%'>
          <div class='col-md-12'>
            <div style='--aspect-ratio: 16/9;'>
                  <div class="register-box">
  <div class="register-logo">
    <a href=""><b>GERENCIAMENTO DE DADOS PESSOAIS </b></a>

  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Seja Bem-vindo(a) <?php echo ucfirst(USERNM); ?><br>
     <strong>Atualize seus dados</strong> É rápido! Leva menos de 1 minuto.



      </p>

       <form  name="form" method="post" action="sistema/controller/inserirDados.php" enctype="multipart/form-data">
      <?php echo " <input type='hidden' name='idusr' value='".USER."'>";?>
      <?php echo " <input type='hidden' name='link' value='".$_REQUEST['link']."'>";?>
      <?php echo " <input type='hidden' name='nmpgn' value='".$_REQUEST['nmpgn']."'>";?>
           <div class="form-group row">
     <?php  
     $objSlct->SetEditarUSer(USER);?>
        <div class="col-12 text-right">
            <button type="submit" name="editar_user" class="btn btn-outline-success btn-small">Enviar</button>
          </div>
      </form>

    </div>
  </div>
</div>
 </div>
          </div>
        </div>
      </div>
     </div> 
