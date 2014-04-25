<!DOCTYPE html>


    <head>
        <title>Anaaa XHTML 1.0 Strict standard template</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <base href="<?php echo $this->config->item('base_url') ?>" />
        <link rel="stylesheet" type="text/css" href="Styles/EstiloIndex.css"></link>
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
                    <a href='<?php echo site_url('/Home/index');?>'>
                    <li class="noSub"> 
                        <span>Entrada</span>
                    </li> 
                    </a> 
                    <a href='<?php echo site_url('/Noticias/index');?>'>
                    <li class="noSub">
                        <span>Notícias</span>
                    </li> 
                    </a> 
                    <a href=''>
                    <li class="noSub">
                        <span>Irmandade</span>
                    </li> 
                    </a>
                   
                    <li class="haveSub">
                        <span>Saúde</span>
                        <ul class="sub">
                            <a href=''>
                            <li>
                               <span>Corpo Clinico</span>
                            </li> 
                            </a>
                             <a href='<?php echo site_url('/Saude/especialidades');?>'>
                            <li>
                               <span>Especialidades</span>
                            </li> 
                            </a>
                            <a href='<?php echo site_url('/ComporNoticia/index');?>'>
                            <li>
                                <span>submenu3</span>
                            </li> 
                            </a>
                        </ul>
                    </li> 
                   
                    <a href=''>
                    <li class="noSub">
                        <span>Localização</span>
                    </li>
                    </a>
                    <a href='<?php echo site_url('/Contactos/index');?>'>
                    <li class="noSub">
                        <span>Contactos</span>
                    </li> 
                    </a>
                </ul> 
            </div> 
            
            <div id="menuTopo2">
                <div id="search">
                    <input type="text" placeholder="Procurar" id="caixaTexto">
                  
                        
                    </input>
                    
                    
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
     <input class="loginTextFild"type="text" placeholder="Utilizador"></input>
     <input class="loginTextFild" type="password" placeholder="Password"></input><br>
     <input type="button" value="Entrar">
     <div id="linha"></div>
     <h8>Ainda não tens conta? <a href="">Criar Conta</a></h8>
    
</div>
                    
                </div> 
                
            </div>
        </nav>
        <div id="IconTopo"> 
            <!--        <img src="../../Styles/Images/image.png"alt="logotipo"></img>-->
        </div>
        
           

    
        <script type="text/javascript">
            //<![CDATA[
          $(document).ready(function(){
              
             setInterval(function (){mudaImagem();},10000);
              
               
               
				$(window).bind('scroll',function(e){
			   		parallaxScroll();
			   	});
			   	
			   	
			   	function parallaxScroll(){
			   		var scrolledY = $(window).scrollTop();
					//$('.bgWrapper').css('background-position','center -'+((scrolledY*0.2))+'px');
					//$('.shark').css('top','-'+((scrolledY*0.8))+'px');
					//$('#tabelaimagem').css('top','+'+((scrolledY*0.8))+'px');
			   	}

                                 $("#pracima").click(function (event){
                                    
                                         $("#imagemFundo").toggle(1000);
                                         if($("#imagemFundo").is(":visible")){
                                              
                                            $('#pracima').attr('src','Styles/Images/up-arrow.png');
                                         }else{
                                             $('#pracima').attr('src','Styles/Images/imgDown.png');
                                            
                                         }
                                     
                                     
                   
                                });

			   	
			});
          
          
         


            
            //]]>
        </script>
        
       
        <div id="conteudoCentro" >
           
           
             
           <div id="imagemFundo">
               
               <img src="Styles/Images/santa_casa.svg"/>
                <table id="tabela">
                    
                    <tr>
                        <td>
                             <a href="" >
                                 <img src="Styles/Images/especialidades.png" class="imagemDoIcon"></img>
                            <p>Especialidades</p>
                             </a>
                        </td>
                        <td>
                            <a href="" >
                            <img src="Styles/Images/stethoscope-icon.png" class="imagemDoIcon"></img>
                            <p>Consultas</p>
                            </a>
                        </td>
                        <td>
                              <a href="" >
                            <img src="Styles/Images/seniors-icon.png" class="imagemDoIcon"></img>
                          <p>Cuidados Geriatricos</p>
                              </a>
                           
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <a href="" >
                            <img src="Styles/Images/User-Group-icon.png" class="imagemDoIcon"></img>
                            <p>Voluntariado</p>
                            </a>
                        </td>
                        <td>
                            <a href="" >
                            <img src="Styles/Images/family-icon.png" class="imagemDoIcon"></img>
                            <p>Creche</p>
                            </a>
                        </td>
                        <td>
                            <a href="" >
                            <img src="Styles/Images/Doctor-icon.png" class="imagemDoIcon"></img>
                            <p>Corpo Clinico</p>
                            </a>
                            
                        </td>
                       
                    </tr>
                </table> 
              
                
                </img>
            </div>
            