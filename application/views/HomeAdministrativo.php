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
echo "                                <td  colspan=\"2\" style=\"text-align: right; height: 30px;\"><button class=\"btn-primary\" style=\" width: 25%; height: 35px;\n"; 
echo "                                    \" >Mudar estado</button></td>\n"; 
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
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
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