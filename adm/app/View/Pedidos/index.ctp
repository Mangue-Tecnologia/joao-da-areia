<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pedidos</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li class="active"><a href="/pedidos">Pedidos</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="titulo">
                    <h3 class="box-title m-b-0">Pedidos</h3>
                    <p class="text-muted m-b-30">Lista de pedidos</p>
                </div>
                <div class="flash" style="overflow: hidden;display: block;width: 100%;">
                    <?php echo $this->Session->flash(); ?>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Número</th>
                                <th>Cliente</th>
                                <th>Pagamento</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Editar Status</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Items as $key=> $value): ?>
                            <tr role="row" class="filter">
                                <td rowspan="1" colspan="1">
                                    <?= str_pad($value['Pedidos'][ 'id'], 7, '0', STR_PAD_LEFT) ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['Pedidos']['nome'] ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['Pedidos']['tipo'] ?>
                                </td>
                                <td rowspan="1" colspan="1">R$
                                    <?= number_format($value['Pedidos']['valor'], 2, ',', '.'); ?>
                                </td>

                                <?php 
                                    if ($value['Pedidos']['status'] == 0 ) { 
                                        $status = "Aguardando Pagamento" ; 
                                    } else if($value[ 'Pedidos']['status'] == 1){ 
                                        $status = "Pago"; 
                                    } else if($value['Pedidos']['status'] == 2){ 
                                        $status = "Cancelado"; 
                                    } else if($value['Pedidos']['status'] == 3){ 
                                        $status = "Entregue"; 
                                    } 
                                ?>
                                <td rowspan="1" colspan="1">
                                    <?= $status ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <a href="pedidos/editar/<?= $value['Pedidos']['id'] ?>" class="btn btn-sm yellow filter-submit margin-bottom" style="color:#FFF;font-size: 12px;">
                                        <i class="fa fa-pencil"></i> Editar Status
                                    </a>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= date('d/m/Y', strtotime($value['Pedidos']['created_at'])); ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <div class="margin-bottom-5">
                                        <a href="pedidos/ver/<?= $value['Pedidos']['id'] ?>" class="btn btn-sm yellow filter-submit margin-bottom" style="color:#FFF;font-size: 12px;">
                                            <i class="fa fa-eye"></i> Ver Pedido
                                        </a>
                                        <a href="pedidos/rastreio/<?= $value['Pedidos']['id'] ?>" class="btn btn-sm yellow filter-submit margin-bottom" style="background: #31708f;color: #FFF;font-size: 12px;">
                                            <i class="fa fa-eye"></i> Rastreio
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