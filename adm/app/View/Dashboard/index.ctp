<div class="container-fluid">
   <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
         <h4 class="page-title">Dashboard</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
         <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
         <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Dashboard</li>
         </ol>
      </div>
      <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12">
         <div class="white-box">
            <div class="row row-in">
               <div class="col-lg-3 col-sm-6 row-in-br">
                  <div class="col-in row">
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        <i data-icon="E" class="linea-icon linea-basic"></i>
                        <h5 class="text-muted vb">VISUALIZAÇÕES</h5>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3 class="counter text-right m-t-15 text-danger"><?= $estatisticas['views']; ?></h3>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="progress">
                           <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only"></span> </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                  <div class="col-in row">
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        <i data-icon="E" class="linea-icon linea-basic"></i>
                        <h5 class="text-muted vb">NOVAS</h5>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3 class="counter text-right m-t-15 text-megna"><?= $estatisticas['v_mes']; ?></h3>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="progress">
                           <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only"></span> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>