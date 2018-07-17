<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Sobre</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="/sobre/textos">Sobre / Texto</a></li>
                <li class="active">Editar</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form method="post" enctype="multipart/form-data" onsubmit="required();return false;">

                    <div class="actions btn-set">
                        <a href="paginas/sobre" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="edit" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Salvar</button>
                    </div>

                    <div class="response-validate">
                        <?php echo $this->Session->flash(); ?>
                    </div>

                    <section>
                        <div class="sttabs tabs-style-line">
                            <nav>
                                <ul>
                                    <li><a href="#section-line-1"><span>Geral</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-line-1">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Texto: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <textarea class="form-control summernote irequired" name="texto"><?= $item['Sobre']['texto'];?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

                        </div>
                    </section>
                    <hr>
                </form>
            </div>
        </div>
    </div>
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