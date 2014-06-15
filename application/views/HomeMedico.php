 

<div id="contentor">
        
    <div id="homeMedico">
    <div id="InformacaoPessoalMedico">
        <img src="Styles/Images/medico.png" alt="foto medico" id="fotomedico"/>
        <?php
      
            echo "<h4>Dr. ".$especialidades['nomemedico']."</h4>\n";
        
        
        ?>
       
        <h4>Telefone: 9122345765</h4>
        <img src="Styles/Images/email.png" alt="email"/>
   
        <a href="mailto:Joao.Crespo@hotnail.com">Joao.Crespo@hotnail.com</a>
        <p><button class="btn btn-success " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/HomeMedico'">Minhas Noticias</button></p>
        <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/#'">Alterar Dados Pessoais</button></p>
        <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/PedidosConsultas'">Horarios</button></p>
        <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/ComporNoticia'">Compor Noticia</button></p>

        
        
        
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

<?php
echo "<div class=\"noticiaPessoal\">\n"; 
echo "            <img src=\"Styles/Images/abertura.jpg\" alt=\"email\" class=\"imagemDaNoticiaHomeMedico\"/>\n"; 
echo "            <div class=\"corponoticiapessoalmedico\">\n"; 
echo "            <h3>".$value['title']."</h3>\n"; 
echo "        <div class=\"butoesNoticiaMedico\">\n";
?>
<form method="get" name="ComporNoticia" action="<?=site_url('/Noticias/editaNoticia');?>">
 <?php
$idNotice=$value['id'];
$databtn1 = array(
    'name' => 'noticia',
    'class' => 'btn btn-primary',
    'value' => "$idNotice",
    'style' => ' width: 100%;position:absolute; height:50%;top:0;left:0;',
    'type' => 'submit',
    'content' => 'Editar'
);
//var_dump($databtn);
//die();
echo form_button($databtn1);
?>
</form>
        
<form method="get" name="ComporNoticia" action="<?=site_url('/Noticias/eliminaNoticia');?>">
<?php
$databtn = array(
    'name' => 'noticia',
    'class' => 'btn btn-danger',
    'value' => "$idNotice",
    'type' => 'submit',
    'style' => ' width: 100%;position:absolute; height:50%;bottom:0;left:0;',
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
    
        
     
  

<!--<script src="https://code.jquery.com/jquery.js"></script>
<script src="Styles/bootstrap/js/bootstrap.min.js"></script>-->

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
        <h3>Especialidades</h3>
        
 <?php
 foreach ($especialidades as $value) {
     
 
echo "<div id=\"DiasConsultasPessoalMedico\">\n"; 
echo "            <h4>".$value['name']."</h4>\n"; 
echo "            <h5>".$value['availability']."</h5>\n"; 
$databtn3 = array(
    'name' => 'noticia',
    'class' => 'btn btn-primary',
    'style' => ' width: 100%;',
    'value' => "$idNotice",
    'type' => 'submit',
    'content' => 'Editar'
);
//var_dump($databtn);
//die();
echo form_button($databtn3);






echo "        </div>\n";
}
?>
    <!-- Button to trigger modal -->
  <div class="row text-center">
            <h3>The Basic Modal</h3>
            <a href="<?php echo site_url('PopUp'); ?>" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>
        </div>
     
   

        
<!--        <div id="DiasConsultasPessoalMedico">
            <h4>Oncologia</h4>
            <h5>Segunda a Sexta</h5>
            <h5>09h-17h</h5>
        </div>-->
    </div>
    </div>
</div>
   

