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
                     console.log(country_id); 
    
         
     
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
        <form action="#" method="post" id="formulario" name="formulario" onsubmit="return validateForm()">
            <fieldset>
                <legend>Informação Pessoal</legend>

                <div class="formItem">
                    <label>Nome:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira o nome completo" required name="nome"/>
                </div>

                <div class="formItem">
                    <label>Data de Nascimento:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira a data de nascimento" required />
                </div>

                <div class="formItem">     
                    <label>Num seg social:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira o numero de seugrança social" required />
                </div>

                <div class="formItem"> 
                    <label>Morada:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira a sua morada" required />
                </div>



                <div class="formItem">

                    <label>Sexo:</label>

                    <input type="radio" name="sexo" value="masculino" />
                    <label>Masculino</label>

                    <input type="radio" name="sexo" value="feminino" />
                    <label>Feminino</label>
                </div>
                <div class="formItem">

                    <label>Email:</label>
                    <input type="email"  class="caixaTexto" placeholder="Insira o seu email" required />
                </div>

                <div class="formItem">
                    <label>Telefone:</label>
                    <input pattern="[789][0-9]{9}"  type="tel" class="caixaTexto" placeholder="Insira o seu numero de telefone" required />
                </div>






            </fieldset>


            <fieldset>
                <legend>Marcaçao</legend>

                

                <div class="formItem" >
                    <label>Especialidade:</label>

                    <select id="especialidade"  class="caixaTexto">
                         <option value="0"></option>
                        <?php
                        
                        foreach ($dados as $each) {
                        ?>   
                       
                        <option value="<?php echo($each->id); ?>" onvalue="<?php echo($each->name); ?>"> <?php echo($each->name); ?></option>
                         <?php
                       }
                        ?> 
                    </select>
                    
                </div>
                <div class="formItem">
                    <label>Medico:</label>
                    
                     <select id="medicos"  class="caixaTexto">
                        
                          
                           
                         <option id="medicos"></option> 
                         
                        
                        
                        
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
