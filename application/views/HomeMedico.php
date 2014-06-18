 

<div id="contentor">
        
    <div id="homeMedico">
    <div id="InformacaoPessoalMedico">
        
        <?php
      foreach ($medico as $value) {
    
            echo " <img src=\"".$value['photo_url']."\" alt=\"foto medico\" id=\"fotomedico\"/>\n";
            echo "<h4>Dr. ".$value['name']."</h4>\n";
            echo "<h4>Tel. ".$value['mobile_phone']."</h4>\n";
            echo "<a href=\"mailto:".$value['email']." \">".$value['email']."</a>\n";


        }
        ?>
       
        
        <img src="Styles/Images/email.png" alt="email"/>
   
        <a href="mailto:Joao.Crespo@hotnail.com">Joao.Crespo@hotnail.com</a>
        
        <p><a href="#" style="width: 100%;" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Alterar dados</a></p>
        <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/PedidosConsultas'">Acordos</button></p>
        <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href='<?php echo site_url();?>/ComporNoticia'">Compor Noticia</button></p>
        <p><a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#basicModal">Consultas</a></p>
        <p><a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#basicModal">Pedidos de alteração de Dados</a></p>


        
        
        
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
  
     
   

        
<!--        <div id="DiasConsultasPessoalMedico">
            <h4>Oncologia</h4>
            <h5>Segunda a Sexta</h5>
            <h5>09h-17h</h5>
        </div>-->
    </div>
    </div>
</div>
   

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Definições Pessoais</h4>
          </div>
          <div class="modal-body">
            <h3>Modal Body</h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>