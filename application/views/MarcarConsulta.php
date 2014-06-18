<h1 class="titulo">Marcar Consulta</h1>
<script>

$(document).ready(function(){   


                    
$('#especialidade').change(function(){
    var country_id = {
                            //alert("inside country3");
                            //country:$('#country').val()
                          country:$('#especialidade option:selected').val() 
                          //$('#especialidade option:selected').val()  
                           // $(this).find(':selected').val()
                            //alert("inside country4");
                    };
                     //console.log(country_id); 
    
         
     
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('Saude/get_doctors'); ?>", 
        data:country_id,
        dataType:"json",//return type expected as json
        success: function(states){
                   
               $.each(states,function(key,val){
                   
                    var opt = $('<option />'); 
                    opt.val(val.user_id);
                    opt.text(val.name);
                    
                    $('#medicos').html(opt);
               });
        },
    });
    
});



 

});
</script>
<div id="contentor">
   
    <section id="formSection">
        <form action="<?php echo site_url('MarcarConsulta');?>" method="POST" id="formulario" name="MarcarConsulta" onsubmit="return validateForm()">
            <fieldset>
                <legend>Informação Pessoal</legend>

                <div class="formItem">
                    <label>Nome:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira o nome completo" required name="nome" value="<?php echo set_value('nome'); ?>"/>
                </div>
                <div style="color: red;"><?php echo form_error('nome'); ?></div>

                <div class="formItem">
                    <label>Data de Nascimento:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira a data de nascimento" required name="dtanas" value="<?php echo set_value('dtanas'); ?>"  />
                </div>

                <div class="formItem">     
                    <label>Num seg social:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira o numero de seugrança social" required name="numSS" value="<?php echo set_value('numSS'); ?>" />
                </div>
                <div style="color: red;"><?php echo form_error('numSS'); ?></div>
                <div class="formItem"> 
                    <label>Morada:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira a sua morada" required name="morada" value="<?php echo set_value('morada'); ?>" />
                </div>
                <div style="color: red;"><?php echo form_error('morada'); ?></div>


                <div class="formItem">

                    <label>Sexo:</label>

                    <input type="radio" name="sexo" value="masculino" <?php echo set_radio('sexo', 'masculino', TRUE ); ?>  />
                    <label>Masculino</label>

                    <input type="radio" name="sexo" value="feminino" <?php echo set_radio('sexo','feminino'); ?> />
                    <label>Feminino</label>
                </div>
                <div class="formItem">

                    <label>Email:</label>
                    <input type="email"  class="caixaTexto" placeholder="Insira o seu email" required name="email" value="<?php echo set_value('email'); ?>"/>
                </div>

                <div class="formItem">
                    <label>Telefone:</label>
                    <input pattern="[789][0-9]{9}"  type="tel" class="caixaTexto" placeholder="Insira o seu numero de telefone" name="tel" value="<?php echo set_value('tel'); ?>" />
                </div>






            </fieldset>


            <fieldset>
                <legend>Marcaçao</legend>

                

                <div class="formItem" >
                    <label>Especialidade:</label>

                    <select id="especialidade"  class="caixaTexto" name="especialidades" >
                         <option value="0"></option>
                        <?php
                        
                        foreach ($dados as $each) {
                        ?>   
                       
                        <option value="<?php echo($each->id);?> " <?php echo set_select('especialidades', '$each->id'); ?> > <?php echo($each->name); ?></option>
                         <?php
                       }
                        ?> 
                    </select>
                    
                    
                    
                </div>
                <div class="formItem">
                    <label>Medico:</label>
                    
                    <select id="medicos"  class="caixaTexto" name="medico">
                        
                          
                           
                        <option></option>
                         
                        
                        
                        
                    </select>
                </div>
                <div class="formItem">
                    <label>Data:</label>
                    <input type="date" class="caixaTexto"  />
                </div>
                <div class="formItem">
                    <label>Hora:</label>
                    <input type="time" class="caixaTexto"  />
                </div>

            </fieldset>



            <div> 
                <input type="submit" value="Marcar" class="btn-lg" />
                
            </div>


        </form>

    </section>




</div>
