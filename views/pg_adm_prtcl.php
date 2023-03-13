<?php
$link = @$_REQUEST['link'];
$nmpgn = @$_REQUEST['nmpgn'];
$cad_on = @$_REQUEST['cad_on'];
$msg = base64_decode(@$_REQUEST['msg']);
@$protocoloBuscar = base64_decode(@$_REQUEST['Protocolo']);
$objSlct = NEW SELECIONARDADOS;
?>
<link rel="stylesheet" href="tmpt/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="tmpt/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h6 class="text-sm"> <sup style="font-size: 20px"></sup>Número de USUÁRIOS (<?php $objSlct->contaUserDpe(); ?> )</h6>
              <p>REGISTRO DE USUÁRIO</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <div class="card-footer">               
                <div class="btn-group">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mais Ações
                  </button>
                  <div class="dropdown-menu">
                  <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listUser=1' class='btn btn-default btn-sm dropdown-item' title='LISTAGEM DE USUARIO''> <i class='fas fa-bars mr-1'></i> LISTAGEM DE USUARIO </a>"; ?>
                  <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=1' class='btn btn-default btn-sm dropdown-item' title='ADICIONAR NOVO USUARIO''> <i class='fas fa-plus mr-1'></i> ADICIONAR NOVO USUARIO </a>"; ?>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <h6 class="text-sm"> <sup style="font-size: 20px"></sup>Número de DEPARTAMENTO (contagem )</h6>
              <p>REGISTRO DE DEPARTAMENTO</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <div class="card-footer">
              <div class="float-right">
                <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listDepart=1' title='LISTAGEM DE DEPARTAMENTO' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-bars'></i></a>"; ?>
              </div>
              <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=2' title='ADICIONAR NOVO DEPARTAMENTO' class='btn btn-default btn-sm'> <i class='fas fa-plus'></i> </a>"; ?>
           </div>            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
              <h6 class="text-sm"> <sup style="font-size: 20px"></sup>Número de PROCESSOS (contagem )</h6>
                <p>CONTROLE DE PROCESSOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
<div class="card-footer">
    <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&' title='LISTAGEM DE DEPARTAMENTO' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-bars'></i></a>"; ?>
  <div class="float-right">
    <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listProcesso=1' title='LISTAGEM DE DEPARTAMENTO' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-bars'></i></a>"; ?>
  </div>
</div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>Número de PÁGINAS (<?php $objSlct->contaPaginas(); ?> )</h6>
                <p>CONTROLE DE PÁGINAS</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <div class="card-footer">
              <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&criaPagina=2' title='LISTAGEM DE DEPARTAMENTO' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-bars'></i></a>"; ?>
  <div class="float-right">
    <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&criaPagina=1' title='CRIA PAGINA' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-plus'></i></a>"; ?>
  </div>
</div>            </div>
          </div>
         
        </div>
       
        <div class="row">
        <?php if(@$_REQUEST['listUser'] == '1') { ?>
            <div class="card-body">
            <div class="card-footer">
            <div class="float-right">
            <?php echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=1' class='btn btn-success btn-sm' title='ADICIONAR NOVO USUARIO''> <i class='fas fa-plus'></i> NOVO REGISTRO </a>"; ?>
            <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-DANGER btn-sm text-uppercase small-box-footer m-1'>fechar</i></a>"; ?>
            </div>
            <h3 class="card-title">LISTAGEM DE USUARIO</h3>
            </div>
 
       <div class="container">
              <table id="example1gerson" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NOME</th>
                  <th>CPF</th>
                  <th>LOGIN</th>                    
                  <th>EMAIL</th>
                  <th>NIVEL DE ACESSO</th>
                  <th>GERÊNCIA</th>
                </tr>
                </thead>
                <tbody>
                <?php $objSlct->listUserDpe();?>
                </tbody>
                <tfoot>
                <tr>
                <th>#</th>
                  <th>NOME</th>
                  <th>CPF</th>
                  <th>LOGIN</th>                    
                  <th>EMAIL</th>
                  <th>NIVEL DE ACESSO</th>
                  <th>GERÊNCIA</th>
                </tr>
                </tfoot>
              </table>
              </div>
            
</div>
     
<?php } ?>

    <!--list departamento-->
    <?php if(@$_REQUEST['listDepart'] == '1') { ?>
      <div class="card-body">
      <div class="card-footer">
        <div class="float-right">
        <?php echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=2' class='btn btn-success btn-sm' title='ADICIONAR NOVO DEPARTAMENTO''> <i class='fas fa-plus'></i> NOVO REGISTRO </a>"; ?>
        <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-DANGER btn-sm text-uppercase small-box-footer m-1'>fechar</i></a>"; ?>
        </div>
      <h3 class="card-title">LISTAGEM DE DEPARTAMENTO</h3>
      </div>
           
              <div class="container">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>SIGLA</th>
                    <th>TITULO</th>                    
                    <th>STATUS</th>
                    <th>GERÊNCIA</th>
                  </tr>
                  </thead>
                  <tbody>
                  chamada de dados
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>NOME</th>
                    <th>SIGLA</th>
                    <th>TITULO</th>                    
                    <th>STATUS</th>
                    <th>GERÊNCIA</th>
                  </tr>
                  </tfoot>
                </table>
            </div>
       </div>     
  <?php } ?>
   
<?php if(@$_REQUEST['gerson'] == '2') { ?>
    <div class="card-body">
  <div class="card-footer">
      <div class="float-right">
      <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listDepart=1' class='btn btn-default text-uppercase btn-sm'><i class='fas fa-bars'></i> visializar registros</a>"; ?>

      </div>
  <i class="fas fa-chart-pie mr-1"></i> REGISTROS DE dados  
    </div>
 <form class="pt-2" method="post" action="#" enctype="multipart/form-data">
   
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">NOME </label>
       <input type="text" name="" class="form-control" minlength="4" required autocomplete="on" id="" placeholder="DIGITE NOME  max(99 caracteres)" maxlength="99">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">SIGLA</label>
       <input type="text" name="" class="form-control" id="" minlength="4" required autocomplete="on" placeholder="SIGLA  max(49 caracteres)" maxlength="49">
     </div>
   </div>
   <div class="form-row">
   <div class="form-group col-md-6">
     <label for="inputAddress">TÍTULO </label>
     <input type="text" name="" class="form-control" autocomplete="on" minlength="4" required id="" placeholder="TÍTULO  max(99 caracteres)" maxlength="99">
   </div>     
 </div>
   <div class="card-footer">
<div class="float-right">
<?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-danger text-uppercase btn-sm'>cancelar</i></a>"; ?>
</div>
<button type="reset" class="btn btn-warning text-uppercase btn-sm">limpar dados</button>

   </div>
 </form>
  </div>
<?php } ?>
<!--setor fim-->
<?php if(@$_REQUEST['gerson'] == '1') { ?>
    <div class="card-body">
    <div class="card-footer">
          <div class="float-right">
          <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&listUser=1' class='btn btn-secondary text-uppercase btn-sm'>  visializar registros <i class='fas fa-bars'></i></i></a>"; ?>

          </div>
          <h3 class="card-title text-secondary"><i class="fas fa-users mr-1"></i> <strong> REGISTRO DE USUARIO</strong></h3>

        </div>
   

        <form class="pt-2" method="post" action="sistema/controller/inserirDados.php" enctype="multipart/form-data">
          <?php echo " <input type='hidden' name='idusr' value='".USERADM."'>";?>
          <?php echo " <input type='hidden' name='link' value='".$_REQUEST['link']."'>";?>
          <?php echo " <input type='hidden' name='nmpgn' value='".$_REQUEST['nmpgn']."'>";?>
          <?php echo " <input type='hidden' name='snh' value='a7a96e519ab4a97b3f0537b15119a451'>";?>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4" class="text-secondary">NOME COMPLETO</label>
              <input type="text" name="nm_usr" class="form-control" required minlength="8" maxlength="149" autocomplete="on" id="" placeholder="DIGITE SEU NOME COMPLETO max(149 caracteres)">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4" class="text-secondary">EMAIL INSTITUCIONAL</label>
              <input type="email" name="email_user" class="form-control" required minlength="8" maxlength="49"id="" autocomplete="on" placeholder="DIGITE SEU EMAIL max(49 caracteres)">
            </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAddress" class="text-secondary">CPF</label>
            <input type="text" name="lgn" class="form-control" minlength="11" maxlength="14" required autocomplete="on" id="" placeholder="DIGITE SEU CPF ">
          </div> 
          <div class="form-group col-md-6">
            <label for="inputAddress" class="text-secondary">NIVEL DE ACESSO</label>
            <select id="inputState" class="form-control"  name='nivel'>
                  <?php $objSlct->selectNivelacesso();?>
                </select>          
              </div>
         
        </div>
          <div class="card-footer">  
          <div class="float-right">
          <?php  echo   "<a href='?link=MTU=&nmpgn=QWRtaW5pc3RyYXRpdm8=&gerson=' class='btn btn-danger text-uppercase btn-sm'>cancelar</i></a>"; ?>
               </div>
               <button type="submit" name="cad_servdpe"  class="btn btn-success btn-sm">ENVIAR</button>
               <button type="reset"  class="btn btn-warning btn-sm">LIMPAR DADOS</button>
          </div>    
        </form>
  
    </div>
<?php } ?>

<?php if(@$_REQUEST['listProcesso'] == '1') { ?>
      <div class="card-body">
      <div class="card-footer">
              <div class="float-right">
             </div>
              <h3 class="card-title">CONTROLE DE PROCESSOS</h3>
              </div>
           
              <div class="container mt-1">
              <div class="content">

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">

                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      
                      <span class="info-box-text text-center text-muted">               
 TOTAL DE PROCESSOS </span>
                      <span class="info-box-number text-center text-muted mb-0"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">CONTRATAÇÃO</span>
                      <span class="info-box-number text-center text-muted mb-0"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">PAGAMENTO</span>
                      <span class="info-box-number text-center text-muted mb-0"> <span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">FOLHA DE PAGAMENTO</span>
                      <span class="info-box-number text-center text-muted mb-0"></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated project duration</span>
                      <span class="info-box-number text-center text-muted mb-0">20 <span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>ATIVIDADES RECENTES</h4> 
                  



                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>
                        <span class="description">Shared publicly - 7:45 PM today</span>
                      </div>                     
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                      </p>
                    </div>




                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>
                        <span class="description">Shared publicly - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                      </p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h6 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h6>
              <div class="col">
              <input type="text" id="numPtvl" class="form-control form-control-sm" title="PESQUISAR POR Nº DO PROCESSO Ex.: XXXX.XX.XX.XX-X" placeholder="Digite Nº DO PROCESSO Ex.: 0000.00.00.000."  onkeypress="mascaraPrtcl( this, event )" name='prtcl'>
              </div>
              <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Client Company
                  <b class="d-block">Deveint Inc</b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

            </div>
            <div class="card-footer">
              <div class="float-right">
              
             </div>
              <h3 class="card-title text-sm">NÚMERO TOTAL DE PROCESSOS</h3>
              </div>
       </div>     
  <?php } ?>



<?php if(@$_REQUEST['criaPagina'] == '1') { ?>
  <div class="card-body">
    <div class="card-footer">
    <div class="float-right">
    </div>
    <h3 class="card-title">CRIA PAGINA</h3>
    </div>

  <div class="container">
    <form method="post" action="sistema/controller/inserirDados.php" class="" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">nome link</label>
      <input type="text" name="nmlinkPagina" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='pg_***_**'>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">nome pagina</label>
      <input type="text" name="nmPagina" required class="form-control" id="exampleInputPassword1" placeholder="">
    </div><div class="form-group">
      <label for="exampleInputPassword1">nome icon</label>
      <input type="text" name="nmIconPagina" required class="form-control" id="exampleInputPassword1" placeholder="">
    </div><div class="form-group">
      <label for="exampleInputPassword1">hbltd</label>
      <input type="number" name="hbltPagina" required class="form-control" id="exampleInputPassword1" placeholder="">
    </div><div class="form-group">
      <label for="exampleInputPassword1">sub_menu</label>
      <input type="number" name="subMnPagina" required class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
  

      <button type="submit" name="criaPagina" class="btn btn-primary">Enviar</button>
      <button type="reset" class="btn btn-warning">limpar campos</button>
    </form>
  </div>
  <div class="card-footer">
  <div class="float-right">
  </div>
  <h3 class="card-title text-sm">PAGINA</h3>
  </div>
  </div>     
<?php } ?>
<?php if(@$_REQUEST['criaPagina'] == '2') { ?>
  <div class="card-body">
    <div class="card-footer">
    <div class="float-right">
    </div>
    <h3 class="card-title">LISTA PAGINAS</h3>
    </div>

  <div class="container">
 <p>  listPaginas </p>

 <table id="example1gerson" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>#</th>
    <th>LINK</th>
    <th>NOME</th>
    <th>ICONE</th>
    <th>HABILITADO</th>
    <th>SUBMENU</th>                    
    <th>GERENCIA</th>
  </tr>
  </thead>
  <tbody>
  <?php  $objSlct->listPaginas();?>
  </tbody>
  <tfoot>
  <tr>
  <th>#</th>
    <th>LINK</th>
    <th>NOME</th>
    <th>ICONE</th>
    <th>HABILITADO</th>
    <th>SUBMENU</th>                    
    <th>GERENCIA</th>
  </tr>
  </tfoot>
</table>
  </div>
  </div>     
<?php } ?>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="tmpt/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="tmpt/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="tmpt/dist/js/adminlte.min.js"></script>
<script src="tmpt/dist/js/demo.js"></script>
<script>
  $('#example1gerson').DataTable({
    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});
</script>



<script>
 function mascaraPrtcl( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;

		if( data.length==4 )
		{
			campo.value = data += '.';
		}
		else if( data.length==7 )
		{
			campo.value = data += '.';
		}else if( data.length==10 )
		{
			campo.value = data += '.';
		}
		else
			campo.value = data;
  }

</script>

<script>
$(function() {
  var NumProt = [
    <?php $objSlct->selectNumPrtcl(); ?>
  ""
  ];
  $("#numPtvl" ).autocomplete({
    source: NumProt
  });
});
</script>