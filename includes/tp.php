  <nav class='main-header navbar navbar-expand navbar-dark navbar-light'>
    <ul class='navbar-nav'>
      <li class='nav-item'>
        <a class='nav-link' data-widget='pushmenu' href='#' role='button'><i class='fas fa-bars'></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <?php   if(isset($_REQUEST["msg"])){ echo base64_decode($_REQUEST["msg"]); }?>              
         </li>
      </ul>  
    <ul class='navbar-nav ml-auto'>     
      <li class='nav-item dropdown'>
        <a class='nav-link' data-toggle='dropdown' href='#'>
          <i class='fa fa-ellipsis-v'></i>
          <span class='badge badge-warning navbar-badge invisible'>15</span>
        </a>
        <div class='dropdown-menu dropdown-menu-lg dropdown-menu-right'>
          <span class='dropdown-item dropdown-header text-uppercase'>nomedosistema</span>
          <div class='dropdown-divider'></div>
          <a href='' class='dropdown-item'>
            <i class='fas fa-home mr-2'></i> nomedosistema
            <span class='float-right text-muted text-sm invisible'>3 mins</span>
          </a>
          <div class='dropdown-divider'></div>
          <a href='' class='dropdown-item'>
            <i class='fas fa-file mr-2'></i> nomedosistema
            <span class='float-right text-muted text-sm invisible'>12 hours</span>
          </a>
          <div class='dropdown-divider'></div>
          <a href='' class='dropdown-item'>
            <i class='fas fa-users mr-2'></i> nomedosistema
            <span class='float-right text-muted text-sm invisible'>2 days</span>
          </a>
          <div class='dropdown-divider'></div>
          <a href='' class='dropdown-item'>
            <i class='fas fa-file mr-2'></i> nomedosistema
            <span class='float-right text-muted text-sm invisible'>12 hours</span>
          </a>
          <div class='dropdown-divider'></div>
          <?php echo" <a href='sistema/controller/logar.php?emmanuelADM=".base64_encode('emmanuelADM')."&NmEmmanuelADM=".base64_encode(USERNMADM)."' class='nav-link' title='SAIR DA SESSÃO'>";?>           <i class='fas fa-power-off mr-2'></i>
 ENCERRAR SESSÃO</a>
        </div>
      </li>
      <li class="nav-item">
         <?php echo"<a href='sistema/controller/logar.php?emmanuelADM=".base64_encode('emmanuelADM')."&NmEmmanuelADM=".base64_encode(USERNMADM)."' class='nav-link' title='SAIR DA SESSÃO'>";?>
          <i class="fas fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>