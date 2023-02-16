<?php
if (base64_decode(@$_REQUEST['v'])=="emmanuelDiasPEREIRA_PROTOCOLOdpe" && base64_decode(@$_REQUEST['v1'])==true){
    @header("Location: sistema/controller/logar.php?passwd=".base64_decode($_REQUEST['p'])."&lg_mn=".base64_decode($_REQUEST['lg'])."&logar=emmanuelADM");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>nomedosistema</title>
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="tmpt/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <div class="content">
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                
                <div class="row">
                  
                  <div class="col-md-4" style="background-color:#33AE91">
                  <div class="content-header">
<p> <h3 class="text-center text-white"> <strong> nomedosistema</strong> </h3></p>
                </div>
                  <div class="text-center ">
                  <img class="img-fluid" src="tmpt/dist/img/T_logo.png" alt="User profile picture">
                </div>


<form name="login" action="sistema/controller/logar.php" method="post" class="was-validated">


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Informe seu usuário" name="lg_mn" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Informe sua senha" name="passwd" required>
    </div>
  </div>



  <button type="submit" name="logar" value="emmanuelADM" class="btn  btn-sm btn-success text-white"><i class="fas fa-sign-in-alt"></i> LOGAR NO SISTEMA</button>
   
</form>

<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label invisible"></label>
    <div class="col-sm-12">
    <?php  if(isset($_REQUEST["msg"])){ echo base64_decode($_REQUEST["msg"]);  }?>
    </div>
  </div>
<footer class="card-footer mt-5">
    <strong>Desenvolvido por  &copy; 2021-* <a href="https://defensoria.ap.def.br/" class="text-white">COOTEC DPE-AP</a></strong><br>
    2022 - Todos os Direitos Reservados
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
                  </div>


                  
                  <div class="col-md-8">
                    <img class="img-fluid"
                       src="tmpt/dist/img/login_missao.jpg"
                       alt="User profile picture">
                       
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
  </div>

</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="tmpt/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="tmpt/dist/js/adminlte.js"></script>
<script src="tmpt/dist/js/demo.js"></script>
<script src="tmpt/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="tmpt/plugins/raphael/raphael.min.js"></script>
<script src="tmpt/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="tmpt/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="tmpt/plugins/chart.js/Chart.min.js"></script>
<script src="tmpt/dist/js/pages/dashboard2.js"></script>
</body>
</html>
<script>
$('span.alert').not('.alert-error').delay(5000).fadeOut(350);
</script>
<script>
    $('#flash-overlay-modal').modal();
</script>