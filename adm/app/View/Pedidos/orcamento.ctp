<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pedidos / Orçamento</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="/">Dashboard</a></li>
                <li class="active"><a href="/pedidos/orcamento">Pedidos / Orçamento</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="titulo">
                    <h3 class="box-title m-b-0">Pedidos / Orçamento</h3>
                    <p class="text-muted m-b-30">Lista de pedidos</p>
                </div>
                <div class="flash" style="overflow: hidden;display: block;width: 100%;">
                    <?php echo $this->Session->flash(); ?>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Solicitante</th>
                                <th>Email</th>
                                <th>Vendedor</th>
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
                                    <?= str_pad($value['PedidosOrcamento'][ 'id'], 7, '0', STR_PAD_LEFT) ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['PedidosOrcamento']['nome'] ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['PedidosOrcamento']['email'] ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= $value['Vendedores']['nome'] ?>
                                </td>

                                <?php 
                                    if ($value['PedidosOrcamento']['status'] == 0 ) { 
                                        $status = "Aguardando" ; 
                                    } else if($value['PedidosOrcamento']['status'] == 1){ 
                                        $status = "Pago"; 
                                    } else if($value['PedidosOrcamento']['status'] == 2){ 
                                        $status = "Cancelado"; 
                                    } else if($value['PedidosOrcamento']['status'] == 3){ 
                                        $status = "Entregue"; 
                                    } 
                                ?>
                                <td rowspan="1" colspan="1">
                                    <?= $status ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <a href="pedidos/orcamento/editar/<?= $value['PedidosOrcamento']['id'] ?>" class="btn btn-sm yellow filter-submit margin-bottom" style="color:#FFF;font-size: 12px;">
                                        <i class="fa fa-pencil"></i> Editar Status
                                    </a>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <?= date('d/m/Y', strtotime($value['PedidosOrcamento']['created_at'])); ?>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <div class="margin-bottom-5">
                                        <a href="pedidos/orcamento/ver/<?= $value['PedidosOrcamento']['id'] ?>" class="btn btn-sm yellow filter-submit margin-bottom" style="color:#FFF;font-size: 12px;">
                                            <i class="fa fa-eye"></i> Ver Pedido
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