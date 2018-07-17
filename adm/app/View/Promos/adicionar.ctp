<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Promoções</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a>
                </li>
                <li><a href="#">Promoções</a>
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
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="actions btn-set">
                        <a href="promos/" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Adicionar</button>
                    </div>

                    <?php echo $this->Session->flash(); ?>

                    <section>
                        <div class="sttabs tabs-style-line">
                            <nav>
                                <ul>
                                    <li><a href="#section-line-1"><span>Geral</span></a>
                                    </li>
                                    <li><a href="#section-line-4"><span>Imagem Principal</span></a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-line-1">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Título: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control js-maxlength" name="titulo" required="required" maxlength="100" data-always-show="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Link:
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control js-maxlength" name="link" maxlength="100" data-always-show="true">
                                            </div>
                                        </div>


                                    </div>
                                </section>
                            </div>

                            <div class="content-wrap">
                                <section id="section-line-4">

                                    <div class="white-box">
                                        <h3 class="box-title">Imagem Upload - <?= $crop['largura']; ?> x <?= $crop['altura']; ?></h3>
                                        <label for="input-file-max-fs">Você pode adicionar imagens com no máximo 2 MB</label>

                                        <?php echo $this->Form->input('imagem',array( 'type' => 'file', 'id' => 'input-file-max-fs','label' => false, 'div' => false, 'class' => 'dropify', 'data-max-file-size' => '2M', 'onchange' => 'fileSelectHandler()') ); ?>

                                        <input type="hidden" id="x1" name="x1" />
                                        <input type="hidden" id="y1" name="y1" />
                                        <input type="hidden" id="w" name="w" />
                                        <input type="hidden" id="h" name="h" />
                                        <input type="hidden" id="aspect" value="<?= $crop['crop']; ?>" />    
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="step2">
                                            <h2 style="display: none;">Selecione a região</h2>
                                                <img id="preview" />
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
    <!-- /.row -->
    <?php echo $this->element('panel-layout') ?>
</div>


<style type="text/css">
    #preview{
        width: 600px !important;
    }
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