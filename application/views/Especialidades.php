<?php  $this->load->view('Head');?>
 
<script type="text/javascript">
           
         
                     
   $(document).ready(function (){
      
       
       $("#especialidadeCorpo").hide(); 

                $("#acu").click(function (event){
                    //$(this).parent().children("ul").toggle();
                    $submenu=$("#especialidadeCorpo");
                    if($submenu.is(":visible")){
                        $submenu.slideToggle("200");
                    }else{
                        $submenu.slideToggle("200");
                    }
                   
                });
    });
          
            
           
        </script>
<div id="especialidades">

   <ul>
       <li id="acu">ACUMPUNTURA</li>
        <li>AUDIOLOGIA</li>
        <li>CARDIOLOGIA</li>
        <li>CIRURGIA GERAL </li>
        <li>DOENÇAS VENOSAS</li>
        <li>CIRURGIA PLÁSTICA</li>
        <li>CIRURGIA VASCULAR</li>
        <li>CLÍNICA GERAL</li>
        <li>DERMATOLOGIA</li>
        <li>ENDOCRINOLOGIA</li>
        <li>MEDICINA DENTÁRIA</li>
        <li>FISIATRIA</li>
        <li>GASTRENTEROLOGIA</li>
        <li>GINECOLOGIA / OBSTETRICIA</li>
       
      <li>MEDICINA INTERNA</li>
        <li>MEDICINA DESPORTIVA </li>
        <li>NEUROCIRURGIA </li>
        <li>NEUROLOGIA</li>
        <li>NUTRIÇÃO</li>
        <li>OFTALMOLOGIA</li>
        <li>OTORRINOLARINGOLOGIA</li>
        <li>ORTOPEDIA</li>
        <li>PNEUMOLOGIA</li>
        <li>PSICOLOGIA</li>
        <li>PSIQUIATRIA</li>
        <li>REUMATOLOGIA</li>
        <li>UROLOGIA</li>
        <li>ELETROMIOGRAFIA</li>
    </ul>
    <div id="especialidadeCorpo">
    
    
</div>
</div>
</div>


<?php  $this->load->view('foot_Site.html');?>