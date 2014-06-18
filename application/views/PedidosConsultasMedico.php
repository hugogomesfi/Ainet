<h1 class="titulo">Pedidos de Consulta</h1>

<div id="contentor">
    <div id="homeMedico">
        <div id="InformacaoPessoalMedico">
            <img src="Styles/Images/medico.png" alt="foto medico" id="fotomedico"/>
            <h4>Administrador: João Crespo</h4>
            <h4>Nome: João Antonio Constantino Crespo</h4>
            <img src="Styles/Images/telefone.png" alt="telefone"/>
            <h4>Telefone: 9122345765</h4>
            <img src="Styles/Images/email.png" alt="email"/>
            <h4>Joao.Crespo@hotnail.com</h4>
            <a href="mailto:example@aaaaa.com">Enviar Email </a>
<!--            <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/HomeMedico'">Noticias</button></p>
            <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/#'">Alterar Dados</button></p>
            <p><button class="btn btn-primary " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/ComporNoticia'">Criar Noticia</button></p>       -->
            <p><button class="btn btn-success " style="width: 100%;"  onclick="location.href = '<?php echo site_url(); ?>/PedidosConsultas'">Consultas</button></p>


        </div>
        <div id="NoticiasPessoalMedico">

            <div class="pedidosConsulta">

                <blockquote>Consultas</blockquote>




                


<?php

    foreach ($consulta as $value) {
    



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
