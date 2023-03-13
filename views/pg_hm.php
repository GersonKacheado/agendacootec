<?php
$link = @$_REQUEST['link'];
$nmpgn = @$_REQUEST['nmpgn'];
$msg = base64_decode(@$_REQUEST['msg']);
$objSlct = NEW SELECIONARDADOS;
?>
  <link rel="stylesheet" href="tmpt/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="tmpt/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="tmpt/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="tmpt/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <div class="content-wrapper mt-1">   
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
            <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
            <div class='row'>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>01</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>02</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>03</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>04</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>05</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>06</h6>
                <p>U</p>
              </div>             
            </div>
          </div>
          <div class="col-lg-1" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h6>07</h6>
                <p>U</p>
              </div>             
            </div>
          </div>          
        </div>  
             
            </div>
            <div class="col-12 col-md-12 col-lg-5 order-1 order-md-2">
              <table id="example1gerson" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><small>#_status</small></th>
                  <th><small>NOME</small></th>
                  <th><small>LOCAL</small></th>
                  <th><small>INFO</small></th>               
                  <th><small>AÇÕES</small></th>
                </tr>
                </thead>
                <tbody>
                <?php $objSlct->listAcoesDpe();?>
                </tbody>
                <tfoot>
                <tr>
                <th><small>#</small></th>
                  <th><small>NOME</small></th>
                  <th><small>LOCAL</small></th>
                  <th><small>INFO</small></th>               
                  <th><small>AÇÕES</small></th>                </tr>
                </tfoot>
              </table>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="card">
            <div class="card-header" title="É obrigatorio a inserção dos dados para cadastro de um evento">
            <strong class="text-secondary"> GERENCIAMENTO DE DADOS DO EVENTO</strong>
            </div>
              <div class="card-body">
              <form method='POST' action='sistema/controller/inserirDados.php'>
                <input type='text' name='stts_evento' value='0'>
                <?php echo " <input type='text' name='idusr' value='".USERADM."'>";?>
                <div class='form-row'>
                <div class='form-group col-md-6 text-uppercase'>
                  <label for='inputEmail4'>TIPO EVENTO</label>
                  <select class='custom-select my-1 mr-sm-2' name='tip_event' id='inlineFormCustomSelectPref' required>
                <option value='ação carreta'>AÇÃO CARRETA</option>
                <option value='inauguração'>INAUGURAÇÃO</option>    
                </select>
                </div>
                <div class='form-group col-md-6'>
                  <label for='inputPassword4'>LOCALIDADE</label>
                  <select class='custom-select my-1 mr-sm-2' name='local_event' id='inlineFormCustomSelectPref' required>
                  <option value='MACAPÁ'>MACAPÁ</option>
                <option value='SANTANA'>SANTANA</option>
                <option value='LARANJAL DO JARI'>LARANJAL DO JARI</option>
                <option value='OIAPOQUE'>OIAPOQUE</option>
                <option value='PORTO GRANDE'>PORTO GRANDE</option>
                <option value='MAZAGÃO'>MAZAGÃO</option>
                <option value='TARTARUGALZINHO'>TARTARUGALZINHO</option>
                <option value='PEDRA BRANCA DO AMAPARI'>PEDRA BRANCA DO AMAPARI</option>
                <option value='VITÓRIA DO JARI'>VITÓRIA DO JARI</option>
                <option value='CALÇOENE'>CALÇOENE</option>
                <option value='AMAPÁ'>AMAPÁ</option>
                <option value='FERREIRA GOMES'>FERREIRA GOMES</option>
                <option value='CUTIAS DO ARAGUARY'>CUTIAS DO ARAGUARY</option>
                <option value='ITAUBAL'>ITAUBAL</option>
                <option value='SERRA DO NAVIO'>SERRA DO NAVIO</option>
                <option value='PRACUÚBA'>PRACUÚBA</option>   
                </select>    
                </div>
                </div>
                <div class='form-group'>
                <label for='inputAddress2'>DATA DO EVENTO</label>
                <input type='date' name='dt_event' class='form-control' id='inputAddress2' placeholder='' required>
                </div>
                <div class='form-row'>
                <div class='form-group col-md-6'>
                <label for='inputAddress2'>HORA INÍCIO</label>
                <input type='time' name='hr_inicio' class='form-control' id='inputAddress2' placeholder='' required>
                </div>
                <div class='form-group col-md-6'>
                <label for='inputAddress2'>HORA FIM</label>
                <input type='time' name='hr_fim' class='form-control' id='inputAddress2' placeholder='' required>
                </div>
                </div>
                <div class='form-group'>
                <label for='inputAddress'>OBSERVAÇÃO</label>
                <textarea class='form-control' name='desc_event' id='' cols='30' rows='3' required></textarea>
                </div>    
                <button type='submit' name='cad_event' class='btn btn-success'>REGISTRAR EVENTO</button>
                </form>
              </div>
    </div>
      </div>      
    </div>
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
        "sInfo":          "Mostrando _START_ de _END_ do total de _TOTAL_ ",
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
            "sNext":    "avançar",
            "sPrevious": "voltar"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});
</script>






