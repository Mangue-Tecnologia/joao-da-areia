<div class="navbar-default sidebar" role="navigation">
   <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
      <div class="sidebar-nav navbar-collapse slimscrollsidebar active" style="overflow: hidden; width: auto; height: 100%;">
         <ul class="nav in" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
               <div class="input-group custom-search-form">
                  <input type="text" class="form-control" placeholder="Buscar..."> <span class="input-group-btn">
                  <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                  </span> 
               </div>
            </li>
            <li class="user-pro">
               <a href="#" class="waves-effect">
                  <img src="img/usuario/<?= $Login['Usuario']['imagem']; ?>" alt="" class="img-circle">
                  <span class="hide-menu">
                     <?= $Login['Usuario']['nome']; ?><span class="fa arrow"></span>
                  </span>
               </a>
               <ul class="nav nav-second-level collapse">
                  <li><a href="perfil/"><i class="ti-user"></i> Meu Perfil</a></li>
                  <li><a href="configuracoes/"><i class="ti-settings"></i> Configurações</a></li>
                  <li><a href="emails/"><i class="ti-email"></i> Emails</a></li>
                  <li><a href="logout/"><i class="fa fa-power-off"></i> Sair</a></li>
               </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Painel de controle</li>
            <li class="active">
               <a href="" class="waves-effect active">
                  <i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
                  <span class="hide-menu"> Dashboard </span>
               </a>
            </li>
            <li>
               <a href="#" class="waves-effect"><i data-icon="" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Páginas<span class="fa arrow"></span></span></a>
               <ul class="nav nav-second-level collapse">
                  <li><a href="paginas/parceiros/">Parceiros</a></li>
                  <li><a href="paginas/sobre/">Sobre</a></li>
                  <li><a href="paginas/blog/">Blog</a></li>
                  <li><a href="paginas/servicos/">Serviços</a></li>
                  <li><a href="paginas/links/">Links</a></li>
               </ul>
            </li>

            <li>
               <a href="banners/" class="waves-effect">
                  <i class="icon-picture" style="width: 20px!important;font-size: 16px;display: inline-block;"></i>
                  <span class="hide-menu">Banners</span>
               </a>
            </li>

            <li>
               <a href="newsletter/" class="waves-effect">
                  <i data-icon=")" class="linea-icon linea-basic fa-fw"></i>
                  <span class="hide-menu">Newsletter</span>
               </a>
            </li>
   
            <!--<li>
               <a href="categorias/" class="waves-effect"><i class="ti-user"></i>
                  <span class="hide-menu">Área restrita </span>
               </a>
            </li>-->

         </ul>
      </div>
      <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 2536px;"></div>
      <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
   </div>
</div>