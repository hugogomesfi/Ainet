<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',plugins: "image"});
</script>



<h1 class="titulo">ComporNoticia</h1>
<div id="formulario">
    <form method="POST" name="ComporNoticia" action="<?php echo site_url('Noticias/insertNoticias');?>">
        
        
        <div id="corpoNoticia">
            <textarea name="corpoNoticia"><?php echo set_value('corpoNoticia'); ?></textarea>
            <div class="error" style="color: red;"><?php echo form_error('corpoNoticia'); ?></div>
    </div>
        
        <div id="formularioDireito">
            
        <p>
        <label>Titulo</label>
        <input name="titulo" type="text" value="<?php echo set_value('titulo'); ?>"/>
        </p>
        <div style="color: red;"><?php echo form_error('titulo'); ?></div>
         <p>
        <label>Especialidade</label>
        <select name="especialidades">
            <option value="0">Selecione uma opção</option>
            <option value="volvo">Clinica geral</option>
            <option value="saab">Psicologia</option>
            <option value="fiat">Neurologia</option>
            <option value="audi">Reumatologia</option>
        </select>
        </p>
        
        <p>
            <label>Imagem</label>
            <input type="file" />    
        </p>
        
        <p>
            <label>Resumo:</label>
            <input name="resumo" type="text" value="<?php echo set_value('resumo'); ?>" />    
        </p>
       
        <div class="error" style="color: red;"><?php echo form_error('resumo'); ?></div>
        
        <div id="publicar">
            <input type="submit" value="Publicar" /> 
        </div>
        </div>
        
        
    </form>
</div>

