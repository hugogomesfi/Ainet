<!DOCTYPE html>


    <head>
        <title>Anaaa XHTML 1.0 Strict standard template</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <base href="<?php echo $this->config->item('base_url') ?>" />
        <link rel="stylesheet" type="text/css" href="Styles/EstiloIndex.css"/>
         <meta name="viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
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
        <nav id="navBar">
       
           
            <div id="menuTopo"> 
                <ul> 
                    
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
                        <a href=''>
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
     <h3>Entra com a tua conta:</h3>
     <input class="loginTextFild" type="text" placeholder="Utilizador"/>
     <input class="loginTextFild" type="password" placeholder="Password"/><br>
     <input type="button" value="Entrar" />
     <div id="linha"></div>
     
     
     <a href="">Criar Conta</a> 
    
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
                              <a href='<?php echo site_url('/CuidadosGeriatricos/index')?> '>
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
                            <a href='<?php echo site_url('/Creche')?> ' >
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
            