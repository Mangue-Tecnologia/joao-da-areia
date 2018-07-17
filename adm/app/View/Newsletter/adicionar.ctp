<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Newsletter</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a>
                </li>
                <li><a href="#">Newsletter</a>
                </li>
                <li class="active">Adicionar</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form action="" method="post">

                    <div class="actions btn-set">
                        <a href="newsletter" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Adicionar</button>
                    </div>

                    <?php echo $this->Session->flash(); ?>

                    <section>
                        <div class="sttabs tabs-style-line">
                            <nav>
                                <ul>
                                    <li><a href="#section-line-1"><span>Geral</span></a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-line-1">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Email: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control js-maxlength" name="email" required="required" maxlength="100" data-always-show="true">
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /tabs -->
                    </section>
                    <!-- Tabstyle start -->
                    <hr>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <?php echo $this->element('panel-layout') ?>

</div>


<style type="text/css">
    .titulo {
        width: 80%;
        float: left;
    }
    .actions {
        width: 100%;
    }
    .actions a {
        width: 100px;
    }
    .actions button {
        width: 120px;
        color: #FFFFFF;
        background-color: #3a9c95;
    }
    .actions button:hover {
        opacity: 0.8;
    }
    .white-box .box-title {
        margin-top: 0px !important;
    }
    .alert {
        margin-top: 20px;
    }
</style>