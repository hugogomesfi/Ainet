<div class="tituloCrecheIrmandade"><h1>Creche</h1></div>

<div id="publicacaoMedicos">
    
    <?php
foreach ($newsCreche as $value) {       
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

</div>


<!--location.href='<?php echo site_url();?>/Noticias'-->

    
<button  class="btn btn-large btn-primary center-block"  onclick="location.href='<?php echo site_url();?>/Noticias'">Ler Mais Noticias</button>


<div>
       <section>
        <article id="info">
            <h5>Necessita de mais informaçoes?</h5>
            <a href="<?php echo site_url('ContacteNos'); ?>">Contacte-nos</a> 
        </article>
    </section>
</div>
