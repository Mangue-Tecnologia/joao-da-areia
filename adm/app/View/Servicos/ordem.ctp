<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Serviços</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/">Serviços</a></li>
                <li><a href="/paginas/servicos">Serviços</a></li>
                <li class="active">Ordem</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form method="post" enctype="multipart/form-data" onsubmit="required();return false;">

                    <div class="actions btn-set">
                        <a href="paginas/servicos" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="edit" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Salvar</button>
                    </div>

                    <div class="response-validate">
                        <?php echo $this->Session->flash(); ?>
                    </div>

                    <section>
                        <div class="sttabs tabs-style-line">
                            <nav>
                                <ul>
                                    <li><a href="#section-line-1"><span>Ordenação</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-line-1">
                                    <div class="form-body">
                                        <ul class="sortable">
                                            <?php
                                            foreach ($items as $key => $value) {
                                                echo '<li class="ui-state-default ui-sortable-handle"><input type="hidden" name="ordem[]" value="'.$value['Servicos']['id'].'"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'.$value['Servicos']['nome'].'</li>';
                                            }
                                            ?>
                                        </ul>
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
    .sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    .sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; }
    .sortable li span { position: absolute; margin-left: -1.3em; }
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
