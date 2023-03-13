<div class="container-fluid">
  <footer class="col-12">
    <div class="float-right text-uppercase">
      <strong >Copyright &copy; 2021 <a style="color:green;" href="http://defensoria.ap.def.br" target="_blank" >DPE-AP</a>.</strong>
      todos os direitos reservados a DPE-AP/TI <br> <p class="text-right">Version 1.0.0</p>
    </div>
  </footer>
</div>
<script src="tmpt/plugins/jquery/jquery.min.js"></script>
<script src="tmpt/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="tmpt/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="tmpt/plugins/chart.js/Chart.min.js"></script>
<script src="tmpt/plugins/sparklines/sparkline.js"></script>
<script src="tmpt/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="tmpt/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="tmpt/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="tmpt/plugins/moment/moment.min.js"></script>
<script src="tmpt/plugins/daterangepicker/daterangepicker.js"></script>
<script src="tmpt/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="tmpt/plugins/summernote/summernote-bs4.min.js"></script>
<script src="tmpt/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="tmpt/dist/js/adminlte.js"></script>
<script src="tmpt/dist/js/demo.js"></script>
<script src="tmpt/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="tmpt/plugins/toastr/toastr.min.js"></script>
<script src="tmpt/plugins/summernote/summernote-bs4.min.js"></script>
<script src="tmpt/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="tmpt/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="tmpt/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $('.textarea').summernote()
      })
</script>
<script src="tmpt/bibliotecas_list_buscar/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
        	"language": {
                "lengthMenu": "Processos _MENU_ por página",
                "zeroRecords": "Nada encontrado",
                "info": " Página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum processo disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar:",
                "paginate": {
                  "next": "Próximo",
                  "previous": "Anterior",
                  "first": "Primeiro",
                  "last": "Último"
    },
            }
        });
  });
  </script>
<script>
var toggler = document.getElementsByClassName("caret");
var i;
for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
<script>
$('span.alert').not('.alert-error').delay(10000).fadeOut(350);
</script>
<script>
    $('#flash-overlay-modal').modal();
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
