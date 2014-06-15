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
<!--        <small>Santa Casa Da Misericórdia <cite title="Source Title"></cite></small>-->
    </blockquote>   
</div>

<div id="publicacaoMedicos">
    
    <?php
    
    
    
        foreach ($newsMedicos as $value) {
            
        
echo " <div class=\"publicacao\" id=\"pub_1\">\n"; 
echo "        <img src=\"Styles/Images/medicin_1.jpg\" alt=\"imagem de publicacao\"/>\n"; 
echo "        <h5>".$value['title']."</h5>\n"; 
echo "        <div class=\"resumo_noticia\"><p>".$value['abstract']."</p></div>\n"; 
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
    
        
  <?php
  //var_dump($newsValencias);
            foreach ($newsValencias as $value) {


echo "    <div class=\"noticia1\">\n"; 
echo "        <h5>".$value['title']."</h5>\n"; 
echo "        <div class=\"img_noticia\">\n"; 
echo "            <img src=\"Styles/Images/147657108.jpg\" alt=\"imagem de noticia\"/>\n"; 
echo "        </div>\n"; 
echo "        <div class=\"resumo_noticia\">\n"; 
echo "            <p>".$value['abstract']."</p></div>\n"; 
echo "        <div>\n"; 
//echo "            <input type=\"button\" value=\"Ler Mais\" class=\"btnpub\"/>\n"; 
echo "          <button class=\"btn btn-primary\"  onclick=\"location.href='<?php echo site_url();?>/Noticias'\">Ir para Noticias</button>\n"; 
echo "\n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 


    
            }
?>
    
    
    
<!--    <div class="noticia1">
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
    </div>-->


</div>

<div class="linhaHugo"></div>

<div class="noticiasprimeiro noticiasprimeiro2">
    <div class="noticia1">
        <a href="<?php echo site_url('/Saude/CorpoClinico'); ?>"><h5>SAUDE</h5> </a>
<!--        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>-->
        <div class="resumo_noticia">
            <p>         Irmandade
               Santa Casa da Misericórdia de Leiria:
                 - Hospital
                 - Clínica</p></div>
<!--        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>


        </div>-->
    </div>
    <div class="noticia2">
        <a href="<?php echo site_url('/CuidadosGeriatricos'); ?>"><h5 > LAR </h5> </a>
<!--        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>-->
        <div class="resumo_noticia"><p>O Lar N. S. da Encarnação ocupa uma área de construção de 5.000 metros quadrados com espaços ajardinados envolventes. O edifício e seu equipamento são considerados do mais moderno e funcional que se tem feito até hoje no nosso país.</p></div>
        <div>
       
<!--            <button class="btn btn-primary"  onclick="location.href='<?php echo site_url();?>/CuidadosGeriatricos'">Entrar</button>-->

        </div>
    </div>
    <div  class="noticia2">
        <a href="<?php echo site_url('/CuidadosGeriatricos'); ?>"><h5>RESIDENCIAL</h5> </a>

<!--        <div class="img_noticia">
            <img src="Styles/Images/147657108.jpg" alt="imagem de noticia"/>
        </div>-->
        <div class="resumo_noticia"><p>A Residencial é o local ideal para repouso de cariz familiar, onde a personalidade de cada utente determina o atendimento dos diversos profissionais desta unidade. Localizado na Rua do Lis junto ao Hospital Dom Manuel de Aguiar, proporciona elevados padrões de qualidade ao nível dos seus serviços.</p></div>
<!--        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>-->
    </div>
    <div class="noticia2">
        <a href="<?php echo site_url('/CuidadosGeriatricos'); ?>"><h5>APOIO DOMICILIARIO</h5> </a>

<!--        <div class="img_noticia">
            <img src="Styles/Images/abertura.jpg" alt="imagem de noticia"/>
        </div>-->
        <div class="resumo_noticia">
            <p>A Residencial é o local ideal para quem pretende uma opção de repouso de cariz familiar, onde a personalidade de cada utente determina o atendimento dos diversos profissionais desta unidade. O edifício, localizado na Rua do Lis junto às instalações do Hospital Dom Manuel de Aguiar, proporciona aos seus utentes elevados padrões de qualidade ao nível dos serviços que presta.</p>
        </div>
<!--        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>-->
    </div>


</div>         



