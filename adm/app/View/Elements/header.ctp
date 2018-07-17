<nav class="navbar navbar-default navbar-static-top m-b-0">
   <div class="navbar-header">
      <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part">
         <a class="logo" href="">
         <b><img src="<?= $conf['layout']['logotipo_url']; ?>" alt="home" style="max-width: 80%;"></b>
         </a>
      </div>
      <ul class="nav navbar-top-links navbar-left hidden-xs active">
         <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
         <li class="in">
            <form role="search" class="app-search hidden-xs">
               <input type="text" placeholder="Buscar..." class="form-control"> <a href="" class="active"><i class="fa fa-search"></i></a> 
            </form>
         </li>
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
         <!-- /.dropdown -->
         <li class="dropdown">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
               <img src="img/usuario/<?= $Login['Usuario']['imagem']; ?>" alt="user-img" width="36" class="img-circle">
               <b class="hidden-xs"><?= $Login['Usuario']['nome']; ?></b>
            </a>
            <ul class="dropdown-menu dropdown-user animated flipInY">
               <li><a href="perfil/"><i class="ti-user"></i> Meu Perfil</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="configuracoes/"><i class="ti-settings"></i> Configurações</a></li>
               <li role="separator" class="divider"></li>
               <li><a href="logout/"><i class="fa fa-power-off"></i> Sair</a></li>
            </ul>
            <!-- /.dropdown-user -->
         </li>
      </ul>
   </div>
   <!-- /.navbar-header -->
   <!-- /.navbar-top-links -->
   <!-- /.navbar-static-side -->
</nav>