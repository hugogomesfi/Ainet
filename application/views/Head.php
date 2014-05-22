<!DOCTYPE html>


    <head>
        <title>Santa Casa da Misericordia de Leiria</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <base href="<?php echo $this->config->item('base_url') ?>" />
        <link rel="stylesheet" type="text/css" href="Styles/EstiloIndex.css"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        

   
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

         
                     
   $(document).ready(function (){
      
       
       $("#submenuLogin").hide(); 
       
                $("#mostraMenuLogin").click(function (event){
                    //$(this).parent().children("ul").toggle();
                    $submenu=$("#submenuLogin");
                    if($submenu.is(":visible")){
                        $submenu.slideUp();
                    }else{
                        $submenu.slideDown();
                    }
                   
                });
    });
          
            
           
        </script>
        
    </head>

    <body>
       
       
<!--              <div id="mostraMenuLogin">
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

</nav>-->
        
    
    <!--
        <nav id="navBar">
       
           
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
         <!-- <div id="IconTopo"> 
                  <img src="../../Styles/Images/image.png"alt="logotipo"></img>
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
                                    </ul>
                
                 </div> 

        </div>
    </nav>-->

               

           
    







    <div id="conteudoCentro" >

        <div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Santa Casa</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Irmandade</a></li>
      <li><a href="#">Noticias</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Saude <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Corpo Clinico</a></li>
          <li><a href="#">Especialidades</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a href="#">Consultas</a></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      <li><a href="#">Creche</a></li>
      <li><a href="#">Cuidados geriatricos</a></li>
      <li><a href="#">Contactos</a></li>
    </ul>
      <form class="navbar-form navbar-left" style="width: 250px;">
      <input class="form-control col-lg-8" placeholder="Search" type="text">
    </form>
    <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"> Entrar <b class="caret"></b></a>
        <ul class="dropdown-menu">
<!--          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>-->
<li style="padding:30px; height: 350px;width: 350px !important;float: right;background-color: #cccccc;opacity: 0.9; border-bottom-right-radius:5px;border-bottom-left-radius:5px;">
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
                    </li>
        </ul>
      </li>
    </ul>
  </div>
</div>



<!--        <div id="imagemFundo">

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
              
                
                
            </div>-->
      
    
        
