<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Cores</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Cores</a></li>
                <li class="active">Editar</li>
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
                        <a href="estoque/cores/<?= $this->request->params['prod']; ?>" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Editar</button>
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
                                            <label class="col-md-2 control-label">Tamanho: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="tamanho">
                                                    <option value="pp" <?= ($item['ProdutosCores']['pp'] == 1) ? "selected" : ""; ?>>PP</option>
                                                    <option value="p" <?= ($item['ProdutosCores']['p'] == 1) ? "selected" : ""; ?>>P</option>
                                                    <option value="m" <?= ($item['ProdutosCores']['m'] == 1) ? "selected" : ""; ?>>M</option>
                                                    <option value="g" <?= ($item['ProdutosCores']['g'] == 1) ? "selected" : ""; ?>>G</option>
                                                    <option value="gg" <?= ($item['ProdutosCores']['gg'] == 1) ? "selected" : ""; ?>>GG</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Cor: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="cor">
                                                    <option value="preta" <?= ($item['ProdutosCores']['cor'] == 'preta') ? "selected" : ""; ?>>Preta</option>
                                                    <option value="branca" <?= ($item['ProdutosCores']['cor'] == 'branca') ? "selected" : ""; ?>>Branca</option>
                                                    <option value="amarela" <?= ($item['ProdutosCores']['cor'] == 'amarela') ? "selected" : ""; ?>>Amarela</option>
                                                    <option value="azul" <?= ($item['ProdutosCores']['cor'] == 'azul') ? "selected" : ""; ?>>Azul</option>
                                                    <option value="verde" <?= ($item['ProdutosCores']['cor'] == 'verde') ? "selected" : ""; ?>>Verde</option>
                                                    <option value="vermelha" <?= ($item['ProdutosCores']['cor'] == 'vermelha') ? "selected" : ""; ?>>Vermelha</option>
                                                    <option value="laranja" <?= ($item['ProdutosCores']['cor'] == 'laranja') ? "selected" : ""; ?>>Laranja</option>
                                                    <option value="marrom" <?= ($item['ProdutosCores']['cor'] == 'marrom') ? "selected" : ""; ?>>Marrom</option>
                                                    <option value="dourado" <?= ($item['ProdutosCores']['cor'] == 'dourado') ? "selected" : ""; ?>>Dourado</option>
                                                    <option value="bege" <?= ($item['ProdutosCores']['cor'] == 'bege') ? "selected" : ""; ?>>Bege</option>
                                                    <option value="cinza" <?= ($item['ProdutosCores']['cor'] == 'cinza') ? "selected" : ""; ?>>Cinza</option>
                                                    <option value="prata" <?= ($item['ProdutosCores']['cor'] == 'prata') ? "selected" : ""; ?>>Prata</option>
                                                    <option value="rosa" <?= ($item['ProdutosCores']['cor'] == 'rosa') ? "selected" : ""; ?>>Rosa</option>
                                                    <option value="roxo" <?= ($item['ProdutosCores']['cor'] == 'roxo') ? "selected" : ""; ?>>Roxo</option>
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