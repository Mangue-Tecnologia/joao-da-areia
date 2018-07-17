<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pedidos / Orçamento</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/pedidos/orcamento">Pedidos</a></li>
                <li><a href="/pedidos/orcamento">Orçamento</a></li>
                <li class="active">Status</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form method="post" onsubmit="required();return false;">
                    <div class="actions btn-set">
                        <a href="/pedidos/orcamento" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Editar</button>
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
                                            <label class="col-md-2 control-label">Status: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired" name="status">
                                                    <option value="0" <?=( $item['PedidosOrcamento']['status'] == 0 ) ? "selected": ""; ?>>Aguardando selecionar o vendedor</option>
                                                    <option value="1" <?=( $item['PedidosOrcamento']['status'] == 1 ) ? "selected": ""; ?>>Em Processamento</option>
                                                    <option value="3" <?=( $item['PedidosOrcamento']['status'] == 3 ) ? "selected": ""; ?>>Pago</option>
                                                    <option value="2" <?=( $item['PedidosOrcamento']['status'] == 2 ) ? "selected": ""; ?>>Cancelado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Vendedor: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired" name="vendedor">
                                                    <option value="">Selecione o vendedor...</option>
                                                    <?php 
                                                        foreach ($vendedores as $key=> $value) { 
                                                        if ($value['Vendedores']['id'] == $item['PedidosOrcamento']['vendedor_id']) { 
                                                            $selected = "selected"; 
                                                        } else { 
                                                            $selected = ""; 
                                                        } 
                                                        echo "<option value='".$value['Vendedores']['id']."' ".$selected.">".$value['Vendedores']['nome']."</option>"; 
                                                        } 
                                                    ?>
                                                </select>
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