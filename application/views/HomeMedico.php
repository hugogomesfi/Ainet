

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
        <p><input class="btn btn-primary " type="reset" value="Alterar Dados" style="width: 100%;"></p>
        <p><input class="btn btn-primary " type="reset" value="Criar Noticia" style="width: 100%;"></p>
        
        
        
    </div>
    <div id="NoticiasPessoalMedico">
        <div id="infonoticiaPessoall">
            <h2>Minhas Noticias</h2>
            <div class="error" style="color: red;"><?php echo form_error('erros'); ?></div>
            <div class="error" style="color: red;"><?php echo form_error('sucesso'); ?></div>
        </div>
        
        <?php
        foreach ($noticias as $value) {
            ?>
<form method="get" name="ComporNoticia" action="<?=site_url('/Noticias/eliminaNoticia');?>">
<?php
echo "<div class=\"noticiaPessoal\">\n"; 
echo "            <img src=\"Styles/Images/abertura.jpg\" alt=\"email\" class=\"imagemDaNoticiaHomeMedico\"/>\n"; 
echo "            <div class=\"corponoticiapessoalmedico\">\n"; 
echo "            <h3>".$value['title']."</h3>\n"; 
echo "        <div class=\"butoesNoticiaMedico\">\n";

echo "<input class=\"btn btn-primary\" type=\"reset\" value=\"Editar\">\n";
$idNotice=$value['id'];

$databtn = array(
    'name' => 'noticia',
    'class' => 'btn btn-danger',
    'value' => "$idNotice",
    'type' => 'submit',
    'content' => 'Eliminar'
);
//var_dump($databtn);
//die();
echo form_button($databtn);
 

echo "        </div>\n";
echo "            </div>\n"; 
echo "        </div>\n";
?>
</form>
<?php
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
   

