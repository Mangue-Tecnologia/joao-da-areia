<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Produtos</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li><a href="/produtos/listagem">Produtos</a></li>
                <li class="active">Editar</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <form method="post" enctype="multipart/form-data" onsubmit="required();return false;">

                    <div class="actions btn-set">
                        <a href="produtos/listagem/" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="edit" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Editar</button>
                    </div>

                    <div class="response-validate">
                        <?php echo $this->Session->flash(); ?>
                    </div>

                    <section>
                        <div class="sttabs tabs-style-line">
                            <nav>
                                <ul>
                                    <li><a href="#section-line-1"><span>Geral</span></a></li>
                                    <li><a href="#section-line-2"><span>Descrição</span></a></li>
                                    <li><a href="#section-line-3"><span>Logística</span></a></li>
                                    <li><a href="#section-line-4"><span>Imagem Principal</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-line-1">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nome: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control irequired js-maxlength" name="nome" maxlength="100" data-always-show="true" value="<?= $item['Produtos']['nome'];?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Categoria: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired categoria" name="categoria" onchange="buscar_subcategorias(this.value)">
                                                    <?php 
                                                        foreach ($categorias as $key=> $value) { 
                                                        if ($value['Categorias']['id'] == $item['Produtos']['categoria_id']) { 
                                                            $selected = "selected"; 
                                                        } else { 
                                                            $selected = ""; 
                                                        } 
                                                        echo "<option value='".$value['Categorias']['id']."' ".$selected.">".$value['Categorias']['nome']."</option>"; 
                                                        } 
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Subcategoria: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired subcategoria" name="subcategoria">
                                                    <?php 
                                                        foreach ($subcategorias as $key=> $value) { 
                                                        if ($value['Subcategorias']['id'] == $item['Produtos']['subcategoria_id']) { 
                                                            $selected = "selected"; 
                                                        } else { 
                                                            $selected = ""; 
                                                        } 
                                                        echo "<option value='".$value['Subcategorias']['id']."' ".$selected.">".$value['Subcategorias']['nome']."</option>"; 
                                                        } 
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Só orçamento? <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="orcamento">
                                                    <option value="0" <?=( $item['Produtos']['orcamento'] == 0 ) ? "selected": ""; ?>>Não</option>
                                                    <option value="1" <?=( $item['Produtos']['orcamento'] == 1 ) ? "selected": ""; ?>>Sim</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Status: <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired" name="status">
                                                    <option value="1" <?=( $item['Produtos']['status'] == 1 ) ? "selected": ""; ?>>Ativado</option>
                                                    <option value="0" <?=( $item['Produtos']['status'] == 0 ) ? "selected": ""; ?>>Desativado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Código:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control js-maxlength" name="codigo" maxlength="50" data-always-show="true" value="<?= $item['Produtos']['codigo'];?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Preço: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control valid" name="preco" data-mask="#.##0,00" data-mask-reverse="true" autocomplete="off" aria-required="true" aria-invalid="false" value="<?= $item['Produtos']['preco'];?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tags:</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control js-tags-input" name="keywords" value="<?= $item['Produtos']['keywords'];?>">
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

                            <div class="content-wrap">
                                <section id="section-line-2">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Descrição:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control summernote" name="descricao"><?= $item['Produtos']['descricao'];?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

                            <div class="content-wrap">
                                <section id="section-line-3">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Tipo de frete: <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control irequired" name="tipo_frete">
                                                    <option value="1" <?=( $item['Produtos']['tipo_frete'] == 1 ) ? "selected": ""; ?>>Frete Gratuito</option>
                                                    <option value="2" <?=( $item['Produtos']['tipo_frete'] == 2 ) ? "selected": ""; ?>>Correios</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>



                            <div class="content-wrap">
                                <section id="section-line-4">

                                    <div class="white-box">
                                        <h3 class="box-title">Upload de imagem</h3>
                                        <label for="input-file-max-fs">Você pode adicionar imagens com no máximo 2 MB</label>

                                        <?php echo $this->Form->input('imagem',array( 'type' => 'file', 'id' => 'input-file-max-fs','label' => false, 'div' => false, 'class' => 'dropify', 'data-max-file-size' => '2M') ); ?>
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