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
                <form action="" class="form-horizontal form-bordered form-row-stripped js-validation" method="post" enctype="multipart/form-data" >
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase"> Adicionar Evento </span>
                            </div>
                            <div class="actions btn-set">
                                <a href="paginas/agenda/" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                                <button type="submit" name="add" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Adicionar</button>
                            </div>
                        </div>
                        <?php echo $this->Session->flash(); ?> 
                        <div class="portlet-body">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_general" data-toggle="tab" aria-expanded="true">Geral </a></li>
                                    <li><a href="#tab_images" data-toggle="tab" aria-expanded="true">Imagem </a></li>
                                </ul>
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Título: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                     <input type="text" class="form-control js-maxlength" name="titulo" required="required" maxlength="100" data-always-show="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Data: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="dia" required="">
                                                        <option value="1">Quinta, 12/10/17</option>
                                                        <option value="2">Sexta, 13/10/17</option>
                                                        <option value="3">Sábado, 14/10/17</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Horário: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <input type="time" class="form-control js-maxlength" name="horario" maxlength="100" data-always-show="true" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descrição curta: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control js-maxlength" name="descricao_curta" maxlength="100" data-always-show="true" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Palestrante: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                     <input type="text" class="form-control js-maxlength" name="nome" required="required" maxlength="100" data-always-show="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Apoio: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control js-maxlength" name="apoio" maxlength="100" data-always-show="true" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Local: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control js-maxlength" name="local" maxlength="100" data-always-show="true" required="required">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Texto: <span class="required">* </span></label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control js-maxlength ckeditor" maxlength="5000" data-always-show="true" name="texto"></textarea>
                                                 </div>
                                             </div>
                                            
                                        </div>
                                    </div>   

                                    <div class="tab-pane" id="tab_images">
                                        <div class="alert alert-warning margin-bottom-10">
                                            <span><i class="fa fa-warning fa-lg"></i> A imagem tem um tamanho padrão mínimo de <?= $largura ?>px de largura.</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-top: 5px;"></button>
                                        </div>
                                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10" style="position: relative;">
                                            <?php echo $this->Form->input('imagem',array( 'type' => 'file', 'id' => 'image_file','label' => false, 'div' => false, 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'onchange' => 'fileSelectHandler()'));
                                            ?>
                                            <input type="hidden" id="x1" name="x1" />
                                            <input type="hidden" id="y1" name="y1" />
                                            <input type="hidden" id="w" name="w" />
                                            <input type="hidden" id="h" name="h" />
                                            <input type="hidden" id="aspect" value="" />                   
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="errorImg"></div>
                                                <div class="step2">
                                                    <h2>Selecione a região</h2>
                                                    <img id="preview" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style type="text/css">
    #preview{
        width: <?= $largura ?>px !important;
    }
</style>