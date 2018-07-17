<div class="login-box login-sidebar">
    <div class="white-box">

        <?php echo $this->Session->flash(); ?>

        <?php 

            echo $this->Form->create('Usuario', 
            array(
                'url' => array(
                    'controller' => 'login',
                    'action' => 'index'
                    ),
                'class' => 'form-horizontal',
                'inputDefaults' => array('label' => false,'div' => false)
                )
            ); 

        ?>
        <a href="javascript:void(0)" class="text-center db">
            <img src="<?= $conf['layout']['logotipo_url']; ?>" alt="Home" style="max-width: 100px;"/>
            <br/>
        </a>
        <div class="form-group m-t-40">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="data[Usuario][email]" required="" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <?php echo $this->Form->input('Usuario.senha', array('class' => 'form-control', 'type' => 'password', 'placeholder' => 'Senha')); ?>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
        </form>
    </div>
</div>

<style>
    body{
        display: block;
    }
</style>