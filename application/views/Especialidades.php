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
            ?>   
        <?php
echo "<div id=\"answer". $each['id'] . "\"><div class=\"textoAnswer\"><header> <h2>". $each['name'] . "</h2> </header>\n"; 
echo "\n"; 
echo "                testo corpo.\n"; 
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
echo "                            <h6>Nome Medico</h6> \n"; 
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
echo "\n"; 
echo "\n"; 
echo "                </div>\n"; 
echo "\n"; 
echo "\n"; 
echo "                <div class=\"cartaoMedico\">\n"; 
echo "                    <div class=\"panel panel-primary\">\n"; 
echo "                        <div class=\"panel-heading\">\n"; 
echo "                            <div class=\"cantoEsquerdoCartaoMedico\">\n"; 
echo "                                <img src=\"Styles/Images/medico.png\" alt=\"fotoMedico\" class=\"img-rounded\">\n"; 
echo "                            </div>\n"; 
echo "                            <h6>Nome Medico</h6> \n"; 
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
echo "\n"; 
echo "\n"; 
echo "                </div>\n"; 
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
?>
                <?php
        }
        ?>    
       

        <div class="new_member_box_display" id="answer">

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet urna at justo imperdiet consequat sed sit amet leo. Integer est ligula, interdum eget gravida eget, pretium id libero. Vestibulum egestas, erat eget fringilla consectetur, orci tortor volutpat purus, vitae interdum dolor nibh nec turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sit amet posuere justo. Nullam venenatis neque in turpis vehicula elementum. Integer convallis nunc vitae massa rutrum, eu tempor velit adipiscing. Morbi eget sagittis nisl. Vivamus ac sapien placerat nisl cursus ultrices et nec ligula. Cras in nisi facilisis, dignissim elit vitae, tristique lorem. Aliquam convallis nec neque non cursus. Aenean metus enim, gravida quis gravida sit amet, imperdiet ac nisl. Nam a orci nisi. Etiam mollis consequat ipsum pharetra egestas. Nunc accumsan dui quis pharetra scelerisque. Curabitur neque metus, ultrices sed interdum et, euismod non nulla.

            Phasellus at sollicitudin quam. Suspendisse at nisl quis odio rutrum porta a ut nibh. Proin vel risus hendrerit, placerat ante ut, consequat neque. In auctor nulla nunc, vitae molestie nibh consequat vel. Nam mollis, elit a vulputate aliquet, leo dui euismod dolor, non hendrerit arcu felis nec odio. Curabitur dapibus turpis eu eros rhoncus varius. Cras pretium vulputate eros at porta. Nullam suscipit, turpis tempus tincidunt auctor, purus sapien scelerisque lectus, sed tristique arcu dui in ante. In hac habitasse platea dictumst. Integer accumsan sodales turpis, luctus mollis leo sagittis in. Nam dolor dui, eleifend ut magna viverra, auctor mollis arcu. Nulla odio eros, gravida eget ultricies placerat, varius at leo. Duis tellus purus, sagittis a varius a, lacinia et nulla. Donec eget erat ligula.

            Sed vehicula consectetur nunc vel suscipit. In hac habitasse platea dictumst. Etiam vehicula id elit sit amet euismod. Fusce pretium purus eget mattis bibendum. Donec tincidunt tempus sapien a elementum. Donec pulvinar orci sit amet tellus tincidunt pretium. Morbi vehicula et tortor non euismod. Morbi ultricies eros nec venenatis eleifend.

            In hac habitasse platea dictumst. Nunc vel tempus est, non ullamcorper nulla. Integer convallis laoreet imperdiet. Nullam sit amet lectus volutpat, faucibus ligula vel, ornare tellus. Sed semper egestas laoreet. Donec eu egestas metus. Nullam sed sapien adipiscing, cursus nulla nec, fringilla velit. Ut iaculis, lorem sit amet fringilla molestie, velit neque ultricies nibh, quis viverra urna tortor ac massa. Pellentesque et convallis mauris. Integer eget vulputate eros.

            Nulla nisl magna, porttitor ut volutpat eu, lacinia et mi. Maecenas ut sapien ut elit tempus blandit sed at dui. Aenean tortor lectus, tempus lacinia blandit quis, lobortis sollicitudin tellus. Morbi quis pretium mi. Cras hendrerit mauris at luctus feugiat. Sed tempus, quam ac pretium mollis, lacus nisi dapibus turpis, ac lacinia dolor neque ac mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam porta ligula nisl, in placerat nisl pretium vitae. </div>

    </div>
    
</div>
  


