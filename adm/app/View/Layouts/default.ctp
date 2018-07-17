<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <base href="<?= Router::url('/', true); ?>">
      <link rel="icon" href="img/icons/icon.png">
      <title><?= $conf['layout']['nome_site']; ?></title>
      
      <!-- Bootstrap Core CSS -->
      <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">

      <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
      <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

      <link href="plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />

      <link href="plugins/bower_components/fancybox/jquery.fancybox.min.css" rel="stylesheet" />

      <link rel="stylesheet" href="plugins/bower_components/dropify/dist/css/dropify.min.css">

      <link href="css/jquery.Jcrop.css" rel="stylesheet" type="text/css">

      <!-- Menu CSS -->
      <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
      <!-- toast CSS -->
      <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
      <!-- morris CSS -->
      <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
      <!-- animation CSS -->
      <link href="css/animate.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/style.php?btn=<?= $conf['layout']['cor_call_to_action']; ?>" rel="stylesheet">
      <!-- color CSS -->
      <link href="css/colors/color.php?cor=<?= $conf['layout']['cor_base'];?>" id="theme" rel="stylesheet">

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Preloader -->
      <div class="preloader">
         <div class="cssload-speeding-wheel"></div>
      </div>
      <div id="wrapper">

         <?php echo $this->element('header') ?>

         <?php echo $this->element('sidebar') ?>

         <!-- Page Content -->
         <div id="page-wrapper">

            <?php echo $this->fetch('content'); ?>

            <footer class="footer text-center"> <?= date('Y'); ?> &copy; <?= $conf['layout']['nome_site']; ?> </footer>
         </div>
         <!-- /#page-wrapper -->
      </div>

      <!-- jQuery -->
      <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
      
      <!-- Bootstrap Core JavaScript -->
      <script src="plugins/bootstrap/dist/js/tether.min.js"></script>
      <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
      <!--slimscroll JavaScript -->
      <script src="js/jquery.slimscroll.js"></script>

      <script src="plugins/bower_components/fancybox/jquery.fancybox.min.js"></script>
      <!--Wave Effects -->
      <script src="js/waves.js"></script>
      <!--Counter js -->
      <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
      <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
      <!--Morris JavaScript -->
      <script src="plugins/bower_components/raphael/raphael-min.js"></script>
      <script src="plugins/bower_components/morrisjs/morris.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/custom.min.js"></script>
      <script src="js/dashboard1.js"></script>
      <script src="js/cbpFWTabs.js"></script>

      <script src="js/jquery.Jcrop.js"></script>

      <!-- Sparkline chart JavaScript -->
      <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
      <script src="plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
      <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
      <script src="plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
      <script src="plugins/bower_components/tags/bootstrap-tagsinput.js"></script>
      <script src="plugins/bower_components/mask/jquery.maskedinput.min.js"></script>
      <script src="plugins/bower_components/summernote/dist/summernote.min.js"></script>
      <script src="plugins/bower_components/maxlength/bootstrap-maxlength.min.js"></script>
      <script src="plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
      <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <script src="js/app.js"></script>

   </body>
</html>