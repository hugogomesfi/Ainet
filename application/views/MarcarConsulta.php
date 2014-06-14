<h1 class="titulo">Marcar Consulta</h1>

<div id="contentor">

    <section id="formSection">
        <form action="#" method="post" id="formulario" >
            <fieldset>
                <legend>Informação Pessoal</legend>

                <div class="formItem">
                    <label>Nome:</label>
                    <input type="text" class="caixaTexto" placeholder="Insira o nome completo" required />
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
                        <?php
                        foreach ($dados as $each) {
                            ?>
                            <option value="<?php echo($each['name']); ?>"> <?php echo($each['name']); ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="formItem">
                    <label>Medico:</label>
                    <input list="medicos" class="caixaTexto" placeholder="Indique um medico (opcional)">
                    <datalist id="medicos">
                        <option value="DR Joao">
                        <option value="Dr antonio">
                        <option value="Dr augusto">
                        <option value="Dra Maria">
                        <option value="Dra antonia">
                    </datalist>
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
                <input type="submit" value="Marcar" class="btnMarcarConsulta" />
            </div>


        </form>

    </section>




</div>
