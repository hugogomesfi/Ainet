
<?php  $this->load->view('Head');?>

<script>
    var $i=0;
function mudaImagem(){
    
    
    var imgs=new Array("Styles/Images/imgfundo.jpg","Styles/Images/imgfundo2.jpg");
    
    
    
    if($i>=imgs.length){
        $i=0;
         
    }
    
    
    $('#imgfundo').fadeOut("slow");
    $('#imgfundo').attr('src', imgs[$i]);
    
    $('#imgfundo').fadeIn("slow").delay(500);
   
    $i++;
}
</script>

    
        
        <img id="imgfundo" src="Styles/Images/imgfundo2.jpg"/>
    
        
        <div id="publicacaoMedicos">
          <div class="publicacao" id="pub_1">
        <img src="Styles/Images/medicin_1.jpg"></img>
        <h5>Medicamentos</h5>
        <div class="resumo_noticia"><p>
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo.       
                    </p></div>
        <div>
        <input type="button" value="Ler Mais" class="btnpub"></>
        </div>
    </div>  
        
        
       
           <div class="publicacao" id="pub_2">
         <img src="Styles/Images/medicin_2.jpg"></img>
         <h5>Novidades</h5>
          <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
        <div>
        <input type="button" value="Ler Mais" class="btnpub"></>
        </div>
    </div> 
    
       
            <div class="publicacao" id="pub_3">
         <img src="Styles/Images/medicin_3.jpg"></img>
         <h5>Genericos</h5>
          <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
         <div>
        <input type="button" value="Ler Mais" class="btnpub"></>
        </div>
    </div> 
        
    </div>
   

<div id="noticias">
            <div id="noticia1" class="noticia">
                <h5>Titulo da Noticia</h5>
                <div class="img_noticia">
                    <img src="Styles/Images/147657108.jpg"></img>
                </div>
                <div class="resumo_noticia">
                    <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">ler mais</a>
                    
                </div>
            </div>
            <div id="noticia2"class="noticia">
                <h5>Noticia2</h5>
                <div class="img_noticia">
                    <img src="Styles/Images/Doenças do comportamento alimentar.jpg"></img>
                </div>
                <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">ler mais</a>
                </div>
            </div>
            <div id="noticia3"class="noticia">
                <h5>Noticia3</h5>
                
                <div class="img_noticia">
                    <img src="Styles/Images/Meia Maratona.jpg"></img>
                </div>
                <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">ler mais</a>
                </div>
            </div>
            <div id="noticia4"class="noticia">
                <h5>Noticia4</h5>
               
                <div class="img_noticia">
                    <img src="Styles/Images/abertura.jpg"></img>
                </div>
                <div class="resumo_noticia">
                   <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p>
                </div>
                <div>
                    <a href="">ler mais</a>
                </div>
            </div>
            </div>


             <div id="noticias">
            <div id="noticia1" class="noticia">
                <h5>Publicação do medico</h5>
                <div class="img_noticia">
                    <img src="Styles/Images/pub1.jpg"></img>
                </div>
                <div class="resumo_noticia">
                    <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">>ler mais</a>
                    
                </div>
            </div>
            <div id="noticia2"class="noticia">
                <h5>Publicação do medico</h5>
                <div class="img_noticia">
                    <img src="Styles/Images/pub2.png"></img>
                </div>
                <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">>ler mais</a>
                </div>
            </div>
            <div id="noticia3"class="noticia">
                <h5>Publicação do medico</h5>
                
                <div class="img_noticia">
                    <img src="Styles/Images/pub3.jpg"></img>
                </div>
                <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p></div>
                <div>
                    <a href="">>ler mais</a>
                </div>
            </div>
            <div id="noticia4"class="noticia">
                <h5>Publicação do medico</h5>
               
                <div class="img_noticia">
                    <img src="Styles/Images/pub4.JPG"></img>
                </div>
                <div class="resumo_noticia">
                   <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                       
                    </p>
                </div>
                <div>
                    <a href="">>ler mais</a>
                </div>
            </div>
            </div>
        
        
        
            
            
            
            
            

</div>

            
            
            
           
           
                
        </div>
        
        

<?php  $this->load->view('foot_Site.html');?>
            
   
