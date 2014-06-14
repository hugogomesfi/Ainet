<div id="contentor">
    
   
<?php

foreach ($dados as $value) {
    


echo "<div class=\"noticias\">\n"; 
echo "    <div class=\"noticiasEsq\">\n"; 
echo "        <div class=\"noticeTitle\">\n"; 
echo "            <h4> ".$value['title']."      </h4>\n"; 
echo "        </div>\n"; 
echo "        <a href=\"<?php echo site_url('/NoticiaGrande/index');?>\">\n"; 
echo "            <img src=\"Styles/Images/n_.jpg\" alt=\"imagem de noticia\"/>\n"; 
echo "        </a>\n"; 
echo "        <div class=\"noticeDate\">\n"; 
echo "            <span> ".$value['date']." </span>\n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <div class=\"noticiasDir\">\n"; 
echo "        <div class=\"noticeSpecialidade\">\n"; 
echo "            <h6>Ginecologia</h6>\n"; 
echo "            <div class=\"linhaHugo\"></div>\n"; 
echo "        </div>\n"; 
echo "        <div class=\"noticeText\">\n"; 
echo "            <span>  ".$value['abstract']."  </span>\n"; 
echo "        </div>\n"; 
echo "        <div class=\"noticeAuthor\">\n"; 
echo "            <span>".$value['name']."</span>\n"; 
echo "           \n"; 
echo "            <input class=\"btnNoticias\" type=\"button\" value=\"Ler mais\"  onclick='echo site_url('/NoticiaGrande/index')'/> \n"; 
echo "            \n"; 
echo "        </div>\n"; 
echo "    </div>\n"; 
echo "</div>\n";
}

?>





</div>
