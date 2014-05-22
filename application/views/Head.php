<!DOCTYPE html>


    <head>
        <title>Santa Casa da Misericordia de Leiria</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <base href="<?php echo $this->config->item('base_url') ?>" />
        <link rel="stylesheet" type="text/css" href="Styles/EstiloIndex.css"/>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript">

    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#services">Services</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<!--        <nav id="navBar">
       
           
            <div id="menuTopo"> 
                <ul class="nav navbar-nav"> 
                    
                    <li class="noSub"> 
                        <a href="<?php echo site_url('/Home/index');?>">
                        <span>Entrada</span>
                        </a>
                    </li> 
                     
                    
                    <li class="noSub">
                        <a href='<?php echo site_url('/Noticias/index');?>'>
                        <span>Notícias</span>
                        </a>
                    </li> 
                     
                    
                    <li class="noSub">
                        <a href='<?php echo site_url('/Irmandade');?>'>
                        <span>Irmandade</span>
                        </a>
                    </li> 
                    
                   
                    <li class="haveSub">
                        <span>Saúde</span>
                        <ul class="sub">
                            
                            <li>
                                <a href="<?php echo site_url('/Saude/CorpoClinico');?>">
                               <span>Corpo Clinico</span>
                               </a>
                            </li> 
                            
                             
                            <li>
                                <a href='<?php echo site_url('/Saude/especialidades');?>'>
                               <span>Especialidades</span>
                               </a>
                            </li> 
                            
                            
                            <li>
                                <a href='<?php echo site_url('/ComporNoticia/index');?>'>
                                <span>submenu3</span>
                                </a>
                            </li> 
                            
                        </ul>
                    </li> 
                   
                   
                    <li class="noSub">
                         <a href=''>
                        <span>Localização</span>
                        </a>
                    </li>
                    
                    
                    <li class="noSub">
                        <a href='<?php echo site_url('/Contactos/index');?>'>
                        <span>Contactos</span>
                        </a>
                    </li> 
                    
                </ul> 
            </div> 
            
            <div id="menuTopo2">
                <div id="search">
                    <input type="text" placeholder="Procurar" id="caixaTexto"/>
                  
                        
                   
                    
                    
                </div> 
                
                <div id="login"> 
                    <ul>
                        <li id="mostraMenuLogin">
                            <span>Entrar</span>
                              
                            
                            <div id="subLogin">
                                <ul id="submenuLogin" >
                                    <li>
                                        <h3>Entra com a tua conta:</h3>
                                    
                                </li>
                                <li>
                                    
                                    
                                    
                                </li>
                                 <li>
                                    
                                     
                                   
                                     
                                </li>
                                <li>
                                      
                                </li>
                                <li id="linha">
                                    
                                </li>
                                </ul>
                            </div>
                            
                        </li>
                    </ul>
                    
<div id="mostraMenuLogin">
    <span>Entrar</span>
</div>
<div id="submenuLogin">
     <h3>Entra com a tua conta:</h3>
     <input class="loginTextFild" type="text" placeholder="Utilizador"/>
     <input class="loginTextFild" type="password" placeholder="Password"/><br>
     <input type="button" value="Entrar" />
     <div id="linha"></div>
     
     
     <a href="">Criar Conta</a> 
    
</div>
                    
                </div> 
                
            </div>
        </nav>-->
        <div id="IconTopo"> 
            <!--        <img src="../../Styles/Images/image.png"alt="logotipo"></img>-->
        </div>
        
           


                <li class="noSub">
                    <a href='<?php echo site_url('/Noticias/index'); ?>'>
                        <span>Notícias</span>
                    </a>
                </li> 


                <li class="noSub">
                    <a href='<?php echo site_url('/Irmandade'); ?>'>
                        <span>Irmandade</span>
                    </a>
                </li> 


                <li class="haveSub">
                    <span>Saúde</span>
                    <ul class="sub">

                        <li>
                            <a href="<?php echo site_url('/Saude/CorpoClinico'); ?>">
                                <span>Corpo Clinico</span>
                            </a>
                        </li> 


                        <li>
                            <a href='<?php echo site_url('/Saude/especialidades'); ?>'>
                                <span>Especialidades</span>
                            </a>
                        </li> 


                        <li>
                            <a href='<?php echo site_url('/ComporNoticia/index'); ?>'>
                                <span>submenu3</span>
                            </a>
                        </li> 

                    </ul>
                </li> 


                <li class="noSub">
                    <a href=''>
                        <span>Localização</span>
                    </a>
                </li>


                <li class="noSub">
                    <a href='<?php echo site_url('/Contactos/index'); ?>'>
                        <span>Contactos</span>
                    </a>
                </li> 

            </ul> 
        </div> 

        <div id="menuTopo2">
            <div id="search">
                <input type="text" placeholder="Procurar" id="caixaTexto"/>





            </div> 

            <div id="login"> 
                <!--                    <ul>
                                        <li id="mostraMenuLogin">
                                            <span>Entrar</span>
                                              
                                            
                                            <div id="subLogin">
                                                <ul id="submenuLogin" >
                                                    <li>
                                                        <h3>Entra com a tua conta:</h3>
                                                    
                                                </li>
                                                <li>
                                                    
                                                    
                                                    
                                                </li>
                                                 <li>
                                                    
                                                     
                                                   
                                                     
                                                </li>
                                                <li>
                                                      
                                                </li>
                                                <li id="linha">
                                                    
                                                </li>
                                                </ul>
                                            </div>
                                            
                                        </li>
                                    </ul>-->

                <div id="mostraMenuLogin">
                    <span>Entrar</span>
                </div>
                <div id="submenuLogin">
                    <?php echo form_open('verifylogin'); ?>
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <input type="email" autofocus="" name="email"  placeholder="Email address" class="form-control" value="<?php echo set_value('email'); ?>">
                    <div class="error" style="color: red;"><?php echo form_error('email'); ?></div>
                    <input type="password" name="passwd" placeholder="Password" class="form-control">
                    <div class="error" style="color: red;"><?php echo form_error('passwd'); ?></div>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    <?php echo form_close('verifylogin'); ?>

                </div>

            </div> 

        </div>
    </nav>
    <div id="IconTopo"> 
        <!--        <img src="../../Styles/Images/image.png"alt="logotipo"></img>-->
    </div>







    <div id="conteudoCentro" >




        <div id="imagemFundo">

            <img src="Styles/Images/santa_casa.svg" alt="Logotipo da SCML"/>
            <table id="tabela">

                <tr>
                    <td>
                        <a href="" >
                            <img src="Styles/Images/especialidades.png" alt="especialidades" class="imagemDoIcon"/>
                            <p>Especialidades</p>
                        </a>
                    </td>
                    <td>
                        <a href="" >
                            <img src="Styles/Images/stethoscope-icon.png" alt="Consultas" class="imagemDoIcon"/>
                            <p>Consultas</p>
                        </a>
                    </td>
                    <td>
                        <a href='<?php echo site_url('/CuidadosGeriatricos/index') ?> '>
                            <img src="Styles/Images/seniors-icon.png" alt="cuidados geriatricos" class="imagemDoIcon"/>
                            <p>Cuidados Geriatricos</p>
                        </a>

                    </td>

                </tr>
                <tr>
                    <td>
                        <a href="" >
                            <img src="Styles/Images/User-Group-icon.png" alt="voluntariado" class="imagemDoIcon"/>
                            <p>Voluntariado</p>
                        </a>
                    </td>
                    <td>
                        <a href='<?php echo site_url('/Creche') ?> ' >
                            <img src="Styles/Images/family-icon.png" alt="Creche" class="imagemDoIcon"/>
                            <p>Creche</p>
                        </a>
                    </td>
                    <td>
                        <a href="" >
                            <img src="Styles/Images/Doctor-icon.png" alt="Corpo clinico" class="imagemDoIcon"/>
                            <p>Corpo Clinico</p>
                            </a>
                            
                        </td>
                       
                    </tr>
                </table> 
              
                
                
            </div>
        <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="Styles/js/bootstrap.min.js"></script>
        
