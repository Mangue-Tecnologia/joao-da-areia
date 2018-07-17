<div class="page-content-wrapper">
    <div class="page-content" style="min-height:724px">
        <div class="page-head">
            <div class="page-title">
                <h1>Agenda <small>estatísticas &amp; admininistração</small></h1>
            </div>              
        </div>
        <ul class="page-breadcrumb breadcrumb">
            <li><a href="dashboard/">Home</a><i class="fa fa-circle"></i></li>
            <li>Agenda </li>
        </ul>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-green-sharp bold uppercase">Lista de Eventos</span>
                        </div>
                        <div class="actions">
                            <a href="paginas/agenda/adicionar" class="btn btn-circle btn-default">
                                <i class="fa fa-plus"></i><span class="hidden-480"> Novo Evento</span>
                            </a>
                        </div>
                    </div>
                    <?php echo $this->Session->flash(); ?> 
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                                
                                <thead>
                                    <tr>
                                        <th width="5%" class="sorting" aria-controls="datatable_orders" rowspan="1" colspan="1">#</th>
                                        <th width="50%" class="sorting" aria-controls="datatable_orders" rowspan="1" colspan="1">Título</th>
                                        <th width="20%" class="sorting" aria-controls="datatable_orders" rowspan="1" colspan="1">Imagem</th>
                                        <th width="15%" aria-controls="datatable_orders" rowspan="1" colspan="1">Ações</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    foreach ($Items as $key => $value):
                                    ?>
                                    <tr role="row" class="filter">
                                        <td rowspan="1" colspan="1"><?= $key + 1 ?></td>
                                        <td rowspan="1" colspan="1"><?= $value['AgendaEventos']['titulo'] ?></td>
                                        <td rowspan="1" colspan="1">
                                            <a href="<?= $conf['assets_url'].'img/Agenda/'.$value['AgendaEventos']['imagem'] ?>" class="fancybox">
                                                <img src="<?= $conf['assets_url'].'img/Agenda/'.$value['AgendaEventos']['imagem'] ?>" style="width: 80px;">
                                            </a>
                                        </td>
                                        <td rowspan="1" colspan="1">
                                            <div class="margin-bottom-5">
                                                <button class="btn btn-sm yellow filter-submit margin-bottom">
                                                    <i class="fa fa-pencil"></i>
                                                        <a href="paginas/agenda/editar/<?= $value['AgendaEventos']['id'] ?>" style="color:#FFF;">Editar</a>
                                                </button>
                                            </div>
                                            <button class="btn btn-sm red filter-cancel">
                                                <i class="fa fa-times"></i>
                                                <a data-href="paginas/agenda/remover/<?= $value['AgendaEventos']['id'] ?>" data-toggle="modal" data-target="#confirm-delete" style="color:#FFF;"> Apagar </a>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
