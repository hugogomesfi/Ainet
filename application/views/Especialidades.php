<script type="text/javascript">

    $(document).ready(function() {
        $('[class^="question"]').on('click', function(e) {
            e.preventDefault();
            var numb = this.className.replace('question', '');
            $("html, body").animate({scrollTop: 0}, 400);
            $('[id^="answer"]').hide();
            $('#answer' + numb).delay(400).show("slow");
            return false; 
            
        });
    });
</script>

<div id="especialidades"><div id="especialidadeTitulo"><h1>Especialidades</h1></div>
    <ul>                          
        <?php
        foreach ($dados as $each) {
            ?>         

            <?php
            echo "  <li class=\"question". $each['id'] . " \">" . $each['name'] . " </li>\n";
            ?>
            <?php
        }
        ?>
    </ul>
    <div id="especialidadeCorpo">

         <?php
         
        
    
               foreach ($dados as $each) {
                          foreach ($dadosM as $each){
           
    
echo "<div id=\"answer". $each['id'] . "\"><div class=\"textoAnswer\"><header> <h2>". $each['name'] . "</h2> </header>\n"; 
echo "\n"; 
echo "                texto corpo.\n"; 
echo "\n"; 
echo "                         </div>\n"; 
echo "\n"; 
echo "            <!--todo o conteudo do lado direito , informação do medico e protocolos-->\n"; 
echo "            <div class=\"textoAnswerRight\">\n"; 
echo "                <!--div com toda a infor do medico cartaoMedico-->\n"; 
echo "                <h5>PROFISSIONAIS</h5>\n"; 
  
echo "                <div class=\"cartaoMedico\">\n"; 
echo "                    <div class=\"panel panel-primary\">\n"; 
echo "                        <div class=\"panel-heading\">\n"; 
echo "                            <div class=\"cantoEsquerdoCartaoMedico\">\n"; 
echo "                                <img src=\"Styles/Images/medico.png\" alt=\"fotoMedico\" class=\"img-rounded\">\n"; 
echo "                            </div>\n"; 
echo "                            <h6>". $each['nomeMedico'] . "</h6> \n"; 
echo "                            <h6>Telefone: 222222222</h6>\n"; 
echo "                        </div>\n"; 
echo "                        <div class=\"panel-body\">\n"; 
echo "                            <div class=\"inferiorCartaoMedico\">\n"; 
echo "                                <h6>Especialidade: Pneumologia </h6> \n"; 
echo "                                <h6>Área Clinica: Alergologia e Pneumologia</h6>\n"; 
echo "\n"; 
echo "                                <div class=\"btnMarcarConsulta\"><p><a class=\"btn btn-default btn-sm\" role=\"button\">Marcar Consulta</a></p></div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "\n"; 
echo "\n"; 
                         


 
echo "                <h5>PROTOCOLOS</h5>\n"; 
echo "                <div class=\"cartaoProtocolo\">\n"; 
echo "                    <div class=\"cantoEsquerdoCartaoProtocolo\">\n"; 
echo "                        <!--<img src=\"Styles/Images/medico.png\"/>-->\n"; 
echo "                    </div>\n"; 
echo "                    <div class=\"cantoDireitoCartaoProtocolo\">\n"; 
echo "                        <h4>Nome da Entidade</h4>   \n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "\n"; 
echo "                <div class=\"cartaoProtocolo\">\n"; 
echo "                    <div class=\"cantoEsquerdoCartaoProtocolo\">\n"; 
echo "                        <!--<img src=\"Styles/Images/medico.png\"/>-->\n"; 
echo "                    </div>\n"; 
echo "                    <div class=\"cantoDireitoCartaoProtocolo\">\n"; 
echo "                        <h4>Nome da Entidade</h4>   \n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "\n"; 
echo "\n"; 
echo "            </div></div>\n";
            }
        }
        ?>    

    </div>
    
</div>
  


