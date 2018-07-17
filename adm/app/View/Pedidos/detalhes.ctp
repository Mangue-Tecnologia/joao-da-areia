<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Pedidos</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="#">Pedidos</a>
                </li>
                <li class="active">Detalhes</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box printableArea">
                <h3><b>PEDIDO</b> <span class="pull-right">#<?= str_pad($item['Pedidos']['id'], 7, '0', STR_PAD_LEFT) ?></span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Brindes Express</b></h3>
                             </address>
                        </div>
                        <div class="pull-right text-right">
                            <address>
                                <h3>Para,</h3>
                                <h4 class="font-bold"><?= $item['Pedidos']['nome']; ?>,</h4>
                                <p class="text-muted m-l-30">
                                    <?= $item['Pedidos']['endereco']; ?> - <?= $item['Pedidos']['numero']; ?>, <?= $item['Pedidos']['complemento']; ?>,
                                    <br/> <?= $item['Pedidos']['bairro']; ?>,
                                    <br/> <?= $item['Pedidos']['cidade']; ?>,
                                    <br/> <?= $item['Pedidos']['estado']; ?> - <?= $item['Pedidos']['cep']; ?></p>
                                <p class="m-t-30"><b>Data do pedido :</b> <i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($item['Pedidos']['created_at'])); ?></p>
                                <p><b>Última atualização :</b> <i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($item['Pedidos']['updated_at'])); ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th class="text-right">Tamanho</th>
                                        <th class="text-right">Quantidade</th>
                                        <th class="text-right">Preço Unitário</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produtos as $key=> $value): $valor_total = $value['preco'] * $value['quantidade']; ?>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <?= $value['nome']; ?>
                                        </td>
                                        <td class="text-right">
                                            <?= $value['tamanho']; ?>
                                        </td>
                                        <td class="text-right">
                                            <?= $value['quantidade']; ?>
                                        </td>
                                        <td class="text-right">R$
                                            <?= number_format($value['preco'], 2, ',', '.'); ?>
                                        </td>
                                        <td class="text-right">R$
                                            <?= number_format($valor_total, 2, ',', '.'); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            <p>SubTotal: R$
                                <?= number_format($item[ 'Pedidos'][ 'valor'], 2, ',', '.'); ?>
                            </p>
                            <hr>
                            <h3><b>Total :</b> R$ <?= number_format($item['Pedidos']['valor'], 2, ',', '.'); ?></h3> </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit"> Reenviar por email </button>
                            <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .row -->
    <!-- /.row -->
    <?php echo $this->element('panel-layout') ?>
</div>