<!DOCTYPE html>
<head>
    <title>Santa Casa da Misericordia de Leiria</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <base href="<?php echo $this->config->item('base_url') ?>" />
    <link rel="stylesheet" type="text/css" href="Styles/EstiloIndex.css"/>
    <link href="Styles/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="Styles/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">  
        $(document).ready(function (){
            $("#submenuLogin").hide(); 
                $("#mostraMenuLogin").click(function (event){
                    $submenu=$("#submenuLogin");
                    if($submenu.is(":visible")){
                        $submenu.slideUp();
                    } else {
                        $submenu.slideDown();
                    }
                });
            });
    </script> 
</head>
<body>
    <div id="conteudoCentro" >
        <div class="navbar navbar-default" style="background-color: #44619D" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand active" href="<?php echo site_url(); ?>">Santa Casa</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('Irmandade'); ?>">Irmandade</a></li>
                    <li><a href="<?php echo site_url('Noticias'); ?>">Noticias</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saude <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('Saude/CorpoClinico'); ?>">Corpo Clinico</a></li>
                            <li><a href="<?php echo site_url('Saude/Especialidades'); ?>">Especialidades</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('Saude/Consultas'); ?>">Consultas</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('Creche'); ?>">Creche</a></li>
                    <li><a href="<?php echo site_url('CuidadosGeriatricos'); ?>">Cuidados geriatricos</a></li>
                    <li><a href="<?php echo site_url('Contactos'); ?>">Contactos</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <input style="float:left;"class="form-control col-lg-8 input-sm" placeholder="Search" type="text">
                    <button style="float:left;margin-left:4px;" type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span></button>
                    <div style="clear:both;"></div>
                </form>
                <?php if ($this->session->userdata('logged_in')): ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"> <?php echo $this->session->userdata('user_name'); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li style="padding:30px; height: 350px;width: 350px !important;float: right;background-color: #cccccc;opacity: 0.9; border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
                                    <a href="<?php echo site_url('Utilizador/logout'); ?>">Logout</a>
                                     <a href="<?php echo site_url('Utilizador/paginaPessoal'); ?>">Pagina Pessoal</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"> Entrar <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li style="padding:30px; height: 350px;width: 350px !important;float: right;background-color: #cccccc;opacity: 0.9; border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
                                    <form method="post" action="<?php echo site_url('utilizador/autenticacao'); ?>">
                                        <h2 class="form-signin-heading">Please sign in</h2>
                                        <input type="email" autofocus="" name="email"  placeholder="Email address" class="form-control" value="<?php echo set_value('email'); ?>">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php endif; ?>