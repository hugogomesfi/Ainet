<div id="contentor">
    <div id="homeMedico">
        <div id="InformacaoPessoalMedico">
            
              <?php
              //var_dump($utente);
             


      foreach ($utente as $value) {
          echo " <img src=\"".$value['photo_url']."\" alt=\"foto medico\" id=\"fotomedico\"/>\n";
    echo "<h4>Sr: ".$value['name']."</h4>\n";
            echo "<h4>Tel. ".$value['mobile_phone']."</h4>\n";
            
           
echo "<a href=\"mailto:".$value['email']." \">".$value['email']."</a>\n";

           
            
          }
        ?>
<!--            <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/HomeMedico'">Noticias</button></p>
-->            <p><a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#basicModal">Alterar Dados</a></p><!--
            <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/ComporNoticia'">Criar Noticia</button></p>       -->
<!--            <p><button class="btn btn-success " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/PedidosConsultas'">Consultas</button></p>-->
            <p><a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#basicModal">Filtrar Consultas</a></p>
            <p><a href="#" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#basicModal">Pedidos de alteração de Dados</a></p>



        </div>
        <div id="NoticiasPessoalMedico">

            <div class="pedidosConsulta">

                <blockquote>Consultas</blockquote>
                <label>Ordenar Por:</label>
                <select id="especialidade"  class="caixaTexto">
                 <option value="motive" <?php echo set_select('motive'); ?> >Data (Crescente)</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Data (Decrescente)</option>
                 
             </select>



                


<?php

    foreach ($consultas as $value) {
    



echo "                <div style=\"padding-top: 40px;\">\n"; 
echo "                    <table  class=\"table table-striped\";>\n"; 
echo "\n"; 
echo "                        <tbody>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Utente:</td>\n"; 
echo "                                <td >".$value['nomePessoa']."</td>\n"; 
echo "                            </tr>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Contacto:</td>\n"; 
echo "                                <td >".$value['mobile_phone']."</td>\n"; 
echo "                            </tr>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Especialidade:</td>\n"; 
echo "                                <td >".$value['nomeEspecialidade']."</td>\n"; 
echo "                            </tr>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Médico:</td>\n"; 
echo "                                <td >".$value['nomeDoutor']."</td>\n"; 
echo "                            </tr>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Data e hora:</td>\n"; 
echo "                                <td >".$value['date_time']."</td>\n"; 
echo "                            </tr>\n"; 
echo "                            <tr>\n"; 
echo "                                <td style=\"font-weight: bold;\">Seguradora:</td>\n"; 
//echo "                                <td >".$value['nomeSeguro']."</td>\n"; 
echo "                            </tr>\n"; 




    $estado=$value['status'];
    switch ($estado) {
    case 0:
echo "<tr class=\"info\">\n"; 
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Pedido de Marcação</td>\n"; 
echo "</tr>\n";
        break;
    case 1: 
echo "<tr class=\"success\">\n"; 
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Marcação Confirmada</td>\n"; 
echo "</tr>\n"; 

        break;
    case 2: 
echo "<tr>\n"; 
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Realizada</td>\n"; 
echo "</tr>\n";
        break;
    case 3: 
echo "<tr class=\"error\">\n"; 
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Cancelada pelo Utente</td>\n"; 
echo "</tr>\n";
        break;
    case 4: 
echo "<tr class=\"error\">\n";  
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Cancelada</td>\n"; 
echo "</tr>\n";
        break;
    case 5: 
echo "<tr class=\"warning\">\n"; 
echo "<td style=\"font-weight: bold;\">Estado:</td>\n"; 
echo "<td>Utente Incontactável</td>\n"; 
echo "</tr>\n";
        break;

    default:
         echo "ERRO";
        break;
} 


echo "                            <tr>\n"; 
echo "                                <td  colspan=\"2\" style=\"text-align: right; height: 30px;\">\n"; 
echo "<p><a href=\"#\" class=\"btn btn-primary pull-right\" style=\"width: 50%;\" data-toggle=\"modal\" data-target=\"#".$value['id']."\">Alterar Estado</a></p>\n"; 
echo "\n";
echo "                                   </td>\n"; 



echo "                            </tr>\n"; 
echo "                        </tbody>\n"; 
echo "                    </table>\n"; 
echo "                </div> \n";

}
?>
                
                
                
               

            </div>







        </div>
        </div>
    
    <div class="links">

        <p><?php echo $links; ?></p>
    </div>
    </div>



<?php
//var_dump($consultas);
//die();
    foreach ($consultas as $value) {
        ?>
 
<form action="<?php echo site_url('HomeAdministrativo/alteraEstadoConsulta');?>" method="POST" id="formulario" name="EditarEstado" onsubmit="return validateForm()">

<div class="modal fade" id="<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Alterar Estado da consulta</h4>
          </div>
          <div class="modal-body">
            <div class="formItem">
                    
                    <p>
                    <label>Estado:</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="0" <?php echo set_radio('estado','0'); ?><?php echo ($value['status']== '0') ?  "checked" : "" ;  ?> />
                    <label>Pedido de Marcação</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="1" <?php echo set_radio('estado','1'); ?> <?php echo ($value['status']== '1') ?  "checked" : "" ;  ?> />
                    <label>Marcação Confirmada</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="2" <?php echo set_radio('estado','2'); ?> <?php echo ($value['status']== '2') ?  "checked" : "" ;  ?> />
                    <label>Realizada</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="3" <?php echo set_radio('estado','3'); ?> <?php echo ($value['status']== '3') ?  "checked" : "" ;  ?> />
                    <label>Cancelada pelo Utente</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="4" <?php echo set_radio('estado','4'); ?> <?php echo ($value['status']== '4') ?  "checked" : "" ;  ?> />
                    <label>Cancelada</label>
                    </p>
                    <p>
                    <input type="radio" name="estado" value="5" <?php echo set_radio('estado','5'); ?> <?php echo ($value['status']== '5') ?  "checked" : "" ;  ?> />
                    <label>Utente Incontactavel</label>
                    </p>
                    
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="idconsulta" value="<?php echo $value['id'];?>">Guardar</button>
          </div>
        </div>
      </div>
    </div>
</form>
<?php
 }
 ?>