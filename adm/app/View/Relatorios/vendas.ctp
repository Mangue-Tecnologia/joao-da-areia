<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Relatórios</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="<?= $conf['site_url']; ?>" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Ver Site</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Relatórios</a></li>
                <li class="active">Vendas</li>
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
                        <a href="" name="back" class="btn btn-default btn-circle"><i class="fa fa-angle-left"></i> Voltar </a>
                        <button type="submit" name="edit" class="btn green-haze btn-circle"><i class="fa fa-check"></i> Gerar</button>
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
                                            <label class="col-md-2 control-label">Período <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="periodo">
                                                    <option value="1">Desde sempre</option> 
                                                    <option value="2">Últimos 7 dias</option>
                                                    <option value="3">Últimos 14 dias</option>
                                                    <option value="4">Último Mês</option>
                                                    <option value="5">Últimos 2 Meses</option>
                                                    <option value="6">Últimos 3 Meses</option>
                                                    <option value="7">Últimos 6 Meses</option>
                                                    <option value="8">Último 1 Ano</option>
                                                    <option value="9">Ano Atual</option>
                                                    <option value="10">Ano Anterior</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Cliente <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="clientes"> 
                                                    <option value="">Todos</option>
                                                    <?php
                                                    foreach ($clientes as $key => $value):
                                                    ?>
                                                    <option value="<?= $value['Clientes']['id']; ?>"><?= $value['Clientes']['nome_completo']; ?> - <?= $value['Clientes']['cpf']; ?></option>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Status <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="status"> 
                                                    <option value="">Todos</option>
                                                    <option value="1">Pago</option>
                                                    <option value="3">Entregue</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Bairro <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="bairro" placeholder="Vazio para buscar todas os bairros.">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Cidade <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="cidade" placeholder="Vazio para buscar todas as cidades.">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Estado <span class="required">* </span>
                                            </label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="estado"> 
                                                    <option value="">Todos</option>
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Formato <span class="required">* </span></label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="formato">
                                                    <option value="1">Excel</option> 
                                                    <option value="2">PDF</option>
                                                </select>
                                            </div>
                                        </div>
      
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
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