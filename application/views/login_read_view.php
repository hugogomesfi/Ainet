<div id="contentor">
    <div class="col-md-8" id="autenticacao">
        <?php echo validation_errors(); ?>
        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('Utilizador/autenticacao'); ?>">
            <h2 class="form-signin-heading">Autenticação</h2>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" <?php echo set_value('email'); ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" btn-primary class="btn btn-default" value="Entrar">
                </div>
            </div>
        </form>
    </div>
</div>
