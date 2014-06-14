<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
    setInterval(function (){mudaImagem();},10000);  
	$(window).bind('scroll',function(e){
   		parallaxScroll();
   	});
   	function parallaxScroll(){
   		var scrolledY = $(window).scrollTop();
   	}
    $("#pracima").click(function (event){
        $("#imagemFundo").toggle(1000);
        if($("#imagemFundo").is(":visible")){
            $('#pracima').attr('src','Styles/Images/up-arrow.png');
        } else {
            $('#pracima').attr('src','Styles/Images/imgDown.png');
        }
   });
});
//]]>
</script>    
<script>
    var $i = 0;
    function mudaImagem() {
        var imgs = new Array("Styles/Images/imgfundo.jpg", "Styles/Images/imgfundo2.jpg");
        if ($i >= imgs.length) {
            $i = 0;
        }
        $('#imgfundo').fadeOut("slow");
        $('#imgfundo').attr('src', imgs[$i]);
        $('#imgfundo').fadeIn("slow").delay(500);
        $i++;
    }
</script>

<div id="IconTopo"> 
    <img src="Styles/Images/santa_casa.svg" alt="Logotipo da SCML"/>
    <blockquote>
        <p>O Saber da Experiencia</p>
        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>   
</div>

<div id="publicacaoMedicos">
    
    <?php
    //var_dump($dados);
    
    
        foreach ($dados as $value) {
            
        
echo " <div class=\"publicacao\" id=\"pub_1\">\n"; 
echo "        <img src=\"Styles/Images/medicin_1.jpg\" alt=\"imagem de publicacao\"/>\n"; 
echo "        <h5>".$value['title']."</h5>\n"; 
echo "        <div class=\"resumo_noticia\"><p>\n"; 
echo "                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. \n"; 
echo "                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo.       \n"; 
echo "            </p></div>\n"; 
echo "        <div>\n"; 
echo "            <input type=\"button\" value=\"Ler Mais\" class=\"btnpub\"/>\n"; 
echo "        </div>\n"; 
echo "    </div> \n";
    }
?>
    
    
    
    
    
    
    
    
    
<!--    <div class="publicacao" id="pub_1">
        <img src="Styles/Images/medicin_1.jpg" alt="imagem de publicacao"/>
        <h5>Medicamentos</h5>
        <div class="resumo_noticia"><p>
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo.       
            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>  

    <div class="publicacao" id="pub_2">
        <img src="Styles/Images/medicin_2.jpg" alt="imagem de publicacao" />
        <h5>Novidades</h5>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div> 

    <div class="publicacao" id="pub_3">
        <img src="Styles/Images/medicin_3.jpg" alt="imagem de publicacao"/>
        <h5>Genericos</h5>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div> -->

</div>

<div class="noticiasprimeiro">
    <div class="noticia1">
        <h5>Titulo da Noticia</h5>
        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia">
            <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>

        </div>
    </div>
    <div  class="noticia2">
        <h5>Noticia2</h5>
        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>
    <div  class="noticia2">
        <h5>Noticia3</h5>

        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia" />
        </div>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>
    <div class="noticia2">
        <h5>Noticia4</h5>

        <div class="img_noticia">
            <img src="Styles/Images/abertura.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia">
            <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p>
        </div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>


</div>

<div class="linhaHugo"></div>

<div class="noticiasprimeiro">
    <div class="noticia1">
        <h5>Titulo da Noticia</h5>
        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia">
            <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>

        </div>
    </div>
    <div class="noticia2">
        <h5>Noticia2</h5>
        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>
    <div  class="noticia2">
        <h5>Noticia3</h5>

        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>
    <div class="noticia2">
        <h5>Noticia4</h5>

        <div class="img_noticia">
            <img src="Styles/Images/abertura.jpg" alt="imagem de noticia"/>
        </div>
        <div class="resumo_noticia">
            <p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p>
        </div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>


</div>         



