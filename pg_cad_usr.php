<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Protocolo | DPE-AP</title>
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="tmpt/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">

                    
                  <div class="register-box">
  <div class="register-logo">
    <a href=""><b>PROTOCOLO </b>DPE-AP</a>
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Bem-vindo à DPE-AP<br>
     <strong>Cadastre-se</strong> É rápido! Leva menos de 1 minuto. </p>

      <form method="post" action="sistema/controller/inserirDados.php" enctype="multipart/form-data">
     
         <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label text-secondary">NOME:</label>
                    <div class="col-sm-9 input-group-sm">
                      <input type="text" name="nm_usr" class="form-control" id="" placeholder="DIGITE SEU NOME COMPLETO">                      
                    </div>
                  </div>
               <!--     <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label text-secondary">SENHA:</label>
                    <div class="col-sm-9 input-group-sm">
                      <input type="password" name="snh" class="form-control" id="" placeholder="DIGITE SUA SENHA">
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label text-secondary">EMAIL:</label>
                    <div class="col-sm-9 input-group-sm">
                      <input type="email" name="email_user" class="form-control" id="" placeholder="DIGITE SEU EMAIL">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label text-secondary">CPF:</label>
                    <div class="col-sm-9 input-group-sm">
                      <input type="text" name="lgn" class="form-control" id="" placeholder="DIGITE SEU CPF">
                    </div>
                  </div>
                 <!--  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label text-secondary">SETOR:</label>                    
                    <div class="col-sm-9 input-group-sm">
                    <select class="form-control select2" name="fk_str">
                      <option> </option>
                    </select> 
                    </div>
                  </div> -->
       
       <!--  <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
              Eu li e concordo com os <a style="color:green" href="#">termos de uso</a>.
              </label>
            </div>
          </div>
        </div> -->
        <div class="col-12 text-right">
            <button type="submit" name="cad_ext" class="btn btn-outline-success btn-small">CADASTRAR</button>
          </div>
      </form>
      <a style="color:green" href="login.php" class="text-center">Já sou cadastrado! <u>clique aqui.</u></a>
    </div>
  </div>
</div>






                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="tmpt/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="tmpt/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="tmpt/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="tmpt/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="tmpt/plugins/raphael/raphael.min.js"></script>
<script src="tmpt/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="tmpt/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="tmpt/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="tmpt/dist/js/pages/dashboard2.js"></script>
</body>
</html>
