<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Arquivos</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
                <ol class="breadcrumb">
                    <li><a href="/">Dashboard</a></li>
                    <li>Downloads</li>
                    <li>Arquivos</li>
                    <li class="active">Editar</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form method="post" onsubmit="required();return false;" enctype="multipart/form-data">
                    <div class="actions btn-set">
                        <a href="downloads/arquivos" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Salvar</button>
                    </div>
                    <?php echo $this->Session->flash(); ?>
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
                                            <label class="col-md-2 control-label">Nome:</label>
                                            <div class="col-md-10">
                                                 <input type="text" class="form-control irequired js-maxlength" name="nome" maxlength="100" data-always-show="true" value="<?= $item['Arquivos']['nome']; ?>">
                                             </div>
                                         </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Categoria: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired" name="agrupamento">
                                                    <?php
                                                    foreach ($categorias as $key => $value) {

                                                        if ($value['Agrupamentos']['id'] == $item['Arquivos']['agrupamento_id']) {
                                                            $selected = "selected";
                                                        } else {
                                                            $selected = "";
                                                        }

                                                        echo "<option value='".$value['Agrupamentos']['id']."' ".$selected.">".$value['Agrupamentos']['nome']."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Arquivo:</label>
                                            <div class="col-md-10">
                                                <?php 

                                                echo $this->Form->input('arquivo',array( 'type' => 'file','label' => false, 'div' => false, 'class' => 'filestyle', 'data-buttonName' => 'btn-primary'));
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- /content -->
                        </div>
                        <!-- /tabs -->
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
