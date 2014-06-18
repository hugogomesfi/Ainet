<div class="contentor">
<div class="corpoCorpoClinico">
    <?php
    //var_dump($dados);
    //die();
//                    foreach ($tabelaespecialidades->result() as $cur_specialty) {
//                    echo $cur_specialty->name;
//                }
   foreach ($dados as $each){
       echo "                <div class=\"cartaoMedicoCorpo\">\n"; 
echo "                    <div class=\"panel panel-primary\">\n"; 
echo "                        <div class=\"panel-heading\">\n"; 
echo "                            <div class=\"cantoEsquerdoCartaoMedico\">\n"; 
echo "                                <img src=\"Styles/Images/medico.png\" alt=\"fotoMedico\" class=\"img-rounded\">\n"; 
echo "                            </div>\n";

echo "<div classs=\"cantoDireitoCartaoMedico\">\n"; 
echo "<h6>". $each->nomemedico . "</h6> \n"; 
echo "<h6>Telefone:". $each->mobile_phone. "</h6>\n"; 
echo "</div>\n"; 
echo "                        </div>\n"; 
echo "                        <div class=\"panel-body\">\n"; 
echo "                            <div class=\"inferiorCartaoMedico\">\n"; 
foreach ($each->especialidades as $r){
    echo "                                <h6>Área Clinica: ". $r['name'] . "</h6>\n"; 
}

echo "\n"; 
echo "                                <div class=\"btnMarcarConsulta\"><p><a class=\"btn btn-default btn-sm\" role=\"button\">Marcar Consulta</a></p></div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n";

   }
   
   
   ?>
    
</div>


</div>
<div class="centrado">
<div class="links">
        
    <p><?php echo $links; ?></p>
    </div>
</div>