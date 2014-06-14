<h1 class="titulo">Pagina Pessoal</h1>

<div id="contentor">
    <div id="homeMedico">
    <div id="InformacaoPessoalMedico">
        <img src="Styles/Images/medico.png" alt="foto medico" id="fotomedico"/>
        <h4>Medico: João Crespo</h4>
        <h4>Nome: João Antonio Constantino Crespo</h4>
        <img src="Styles/Images/telefone.png" alt="telefone"/>
        <h4>Telefone: 9122345765</h4>
        <img src="Styles/Images/email.png" alt="email"/>
        <h4>Joao.Crespo@hotnail.com</h4>
        <a href="mailto:example@aaaaa.com">Enviar Email </a>
        <p><input class="btn btn-primary " type="reset" value="Alterar Dados"></p>
        <p><input class="btn btn-primary " type="reset" value="Criar Noticia"></p>
        
        
    </div>
    <div id="NoticiasPessoalMedico">
        <div id="infonoticiaPessoall">
            <h2>Minhas Noticias</h2>
             
        </div>
        
        <?php
        foreach ($noticias as $value) {
            
        
echo "<div class=\"noticiaPessoal\">\n"; 
echo "            <img src=\"Styles/Images/abertura.jpg\" alt=\"email\" class=\"imagemDaNoticiaHomeMedico\"/>\n"; 
echo "            <div class=\"corponoticiapessoalmedico\">\n"; 
echo "            <h3>".$value['title']."</h3>\n"; 
echo "        <div class=\"butoesNoticiaMedico\">\n";
echo "<input class=\"btn btn-primary\" type=\"reset\" value=\"Editar\">\n";
echo "<input class=\"btn btn-danger\" type=\"submit\" name=\"apagar\" value=\"Eliminar\">\n"; 
echo "        </div>\n";
echo "            </div>\n"; 
echo "        </div>\n";



}
?>
  
<!--        <div class="noticiaPessoal">
            <img src="Styles/Images/abertura.jpg" alt="email" class="imagemDaNoticiaHomeMedico"/>
            <div class="corponoticiapessoalmedico">
            <h5>Ambulância avariou a caminho de hospital</h5>
            <p><span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines..</span><a href="">Ler Mais</a></p>
            </div>
        </div>
         <div class="noticiaPessoal">
             <img src="Styles/Images/medicin_1.jpg" alt="email" class="imagemDaNoticiaHomeMedico"/>
            <div class="corponoticiapessoalmedico">
            <h5>Ambulância avariou a caminho de hospital</h5>
            <p><span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines..</span><a href="">Ler Mais</a></p>
            </div>
        </div>
         <div class="noticiaPessoal">
             <img src="Styles/Images/medicin_2.jpg" alt="email" class="imagemDaNoticiaHomeMedico"/>
            <div class="corponoticiapessoalmedico">
            <h5>Ambulância avariou a caminho de hospital</h5>
            <p><span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines..</span><a href="">Ler Mais</a></p>
            </div>
        </div>
         <div class="noticiaPessoal">
             <img src="Styles/Images/medicin_3.jpg" alt="email" class="imagemDaNoticiaHomeMedico"/>
            <div class="corponoticiapessoalmedico">
            <h5>Ambulância avariou a caminho de hospital</h5>
            <p><span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines..</span><a href="">Ler Mais</a></p>
            </div>
        </div>
        <div class="noticiaPessoal">
             <img src="Styles/Images/medicin_3.jpg" alt="email" class="imagemDaNoticiaHomeMedico"/>
            <div class="corponoticiapessoalmedico">
            <h5>Ambulância avariou a caminho de hospital</h5>
            <p><span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines..</span><a href="">Ler Mais</a></p>
            </div>
        </div>-->
         
    </div>
    <div id="EspecialidadesPessoalMedico">
        <h4>Especialidades</h4>
        
        <div id="DiasConsultasPessoalMedico">
            <h4>Oncologia</h4>
            <h5>Segunda a Sexta</h5>
            <h5>09h-17h</h5>
        </div>
    </div>
    </div>
</div>
   

