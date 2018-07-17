<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Produtos</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li class="active">Produtos</li>
            </ol>
        </div>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="titulo">
                    <h3 class="box-title m-b-0">Produtos</h3>
                    <p class="text-muted m-b-30">Lista de produtos</p>
                </div>
                <div class="novo">
                    <a href="produtos/listagem/adicionar/" class="btn btn-circle btn-default">
                        <i class="fa fa-plus"></i><span class="hidden-480"> Novo</span>
                    </a>
                </div>
                <div class="flash" style="overflow: hidden;display: block;width: 100%;">
                    <?php echo $this->Session->flash(); ?>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Subcategoria</th>
                                <th>Preço</th>
                                <th>Imagem</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Items as $key=> $value): ?>
                            <tr role="row" class="filter">
                                <td rowspan="1" colspan="1">
                                    <?= $key + 1 ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <a href="<?= $conf['assets_url'].'produto/'.$value['Produtos']['codigo_slug'].'/'.$value['Produtos']['slug'] ?>" target="_blank">
                                        <?= $value['Produtos']['nome'] ?>    
                                    </a>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['Categorias']['nome'] ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['Subcategorias']['nome'] ?>
                                </td>
                                <td rowspan="1" colspan="1">R$
                                    <?= number_format($value['Produtos']['preco'], 2, ',', '.'); ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <a href="<?= $conf['assets_url'].'img/produtos/'.$value['Produtos']['imagem'] ?>" class="fancybox">
                                        <img src="<?= $conf['assets_url'].'img/produtos/'.$value['Produtos']['imagem'] ?>" class="img-responsive" style="width:80px;"></img>
                                    </a>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?php
                                    if ($value['Produtos']['status'] == 1) {
                                        echo "<span class='label label-success label-rounded'>Ativo</span>";
                                    } else {
                                        echo "<span class='label label-danger label-rounded'>Inativo</span>";
                                    }
                                    ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <div class="margin-bottom-5">
                                        <a class="btn btn-sm yellow filter-submit margin-bottom" style="color:#FFF;font-size: 12px;" href="produtos/listagem/editar/<?= $value['Produtos']['id'] ?>">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>
                                    </div>
                                    <div class="margin-bottom-5">
                                        <a class="btn btn-sm red filter-cancel" data-href="produtos/listagem/remover/<?= $value['Produtos']['id'] ?>" data-toggle="modal" data-target="#confirm-delete" style="color:#FFF;font-size: 12px;">
                                            <i class="fa fa-times"></i> Apagar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <?php echo $this->element('panel-layout') ?>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>

            <div class="modal-body">
                <p>Tem certeza?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Apagar</a>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .yellow.btn {
        color: #FFFFFF;
        background-color: #FFB848;
        float: left;
    }
    .red.btn {
        color: #FFFFFF;
        background-color: #d84a38;
    }
    .yellow.btn:hover,
    .red.btn:hover {
        opacity: 0.6;
    }
    .titulo {
        width: 80%;
        float: left;
    }
    .novo {
        width: 20%;
        float: right;
    }
    .novo a {
        width: 100px;
    }
    .novo a span {
        line-height: 1.25;
    }
    .btn-circle {
        border-radius: 25px !important;
    }
</style>