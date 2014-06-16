<div id="noticiaGrande">
    
    <?php
    foreach ($noticia as $value) {
        
    
echo "<div id=\"noticiaGesq\">\n"; 
echo "        <div id=\"titleBnoticia\">\n"; 
echo "            <h2>".$value['title']."</h2>\n"; 
echo "        </div>\n"; 
echo "    <div id=\"noticiaGimg\">\n"; 
echo "        <img id=\"imgNoticiaBig\" src=\"Styles/Images/n_.jpg\"></img> \n"; 
echo "    </div>\n"; 
echo "    <div id=\"txtNoticeGrande\">\n"; 
echo "        <span>Morreu o professor e empresário Manuel Forjaz, que, nos últimos cinco anos, viveu uma intensa batalha contra um cancro no pulmão, noticiou a TVI. Morreu neste domingo de manhã, aos 50 anos, em casa, Lisboa.\n"; 
echo "\n"; 
echo $value['body'];
echo "\n"; 
echo "    </span>\n"; 
echo "    \n"; 
echo "    </div>\n"; 
echo "        <div id=\"noticiaGdata_autor\">\n"; 
echo "            <div id=\"NGdata\">\n"; 
echo "                <span>06/03/2014</span>\n"; 
echo "            </div>\n"; 
echo "            <div id=\"NGespecialidade\">\n"; 
echo "                <span>Especialidade</span>\n"; 
echo "            </div>\n"; 
echo "            <img id=\"caraMedico\" src=\"Styles/Images/medico.png\" alt=\"cara do medico\"/>\n"; 
echo "            <div id=\"NGautor\">\n"; 
echo "                <a href='<?php echo site_url('/HomeMedico/index');?>'><span>ricardo francisco</span></a>     \n"; 
echo "            </div>\n"; 
echo "        </div>\n"; 
echo "    </div>\n";
}
?>
    
    
    <div id="noticiaGdir">
        <header id="noticiaRelacionadasTitle">
                <h3>Notícias relacionadas...</h3>
        </header>
        <div id="noticiaRelacionadas">
            <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <p>titulo da noticia</p>
                </div>
            </div>
            
            <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <p>titulo da noticia</p>
                </div>
            </div>
            
            <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <h4>titulo da noticia</h4>
                </div>
            </div>
            
            <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <h4>titulo da noticia</h4>
                </div>
            </div>
            
                        <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <h4>titulo da noticia</h4>
                </div>
            </div>
            
            <div class="campoNoticiaLitle">
                <img id="imgNoticiaLitle" src="Styles/Images/n_.jpg"/>
                <div id="titleNoticiaLitle">
                    <h4>titulo da noticia</h4>
                </div>
            </div>
     </div>
    </div>
      
    
</div>
