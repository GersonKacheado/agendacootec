<?php
$objSlct->selectimg(USERADM);
$img = $objSlct->getimg();
?>
  <aside class='main-sidebar sidebar-dark-primary elevation-4'>
    <a href='#' class='brand-link'>
      <img src='<?php echo "tmpt/dist/img/0.jpg" ;?>' alt='Logodosistema' class='brand-image img-circle elevation-3'
           style='opacity: .8'>
      <span class='brand-text font-weight-light text-uppercase'>nomedosistema</span>
    </a>    
    <div class='sidebar'>     
      <div class='info text-sm'>            
      <a href='#' class='brand-link'>
      <img src='<?php echo "tmpt/dist/img/".$img.".jpg" ;?>' alt='AdminLTE Logo' class='brand-image img-circle elevation-3'
           style='opacity: .8'>
      <span class='brand-text font-weight-light text-uppercase'><?php echo ucfirst(USERNMADM) ?></span>
    </a>
        <a href='#' class='d-block'>nomedosetor</a>
    </div>
      <nav class='mt-2'>
        <ul class='nav nav-pills nav-sidebar flex-column' data-widget='treeview' role='menu' data-accordion='false'>
          <?php  $objSlct->selectlink(GRUPO_USERADM);?>         
          <?php echo"          
          <a class='nav-link' href='sistema/controller/logar.php?emmanuelADM=".base64_encode('emmanuelADM')."&NmEmmanuelADM=".base64_encode(USERNMADM)."' title='SAIR DA SESSÃO'>";?>
         <i class='fas fa-sign-out-alt text-secondary'></i> <span>ENCERRAR</span>
          </a>     
      </ul>
      </nav>
    </div>
  </aside>
