<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',plugins: "image"});
</script>



<h1 class="titulo">ComporNoticia</h1>
<?php if (isset($noticia)==FALSE): ?>
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
            
            <?php
                        foreach ($especialidades as $each) {
                            ?>
                            <option value="<?php echo($each['name']); ?>"> <?php echo($each['name']); ?></option>
                            <?php
                        }
                        ?>
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
            <input  class="btn btn-success" type="submit" value="Publicar" /> 
        </div>
        </div>
        
        
    </form>
</div>
<?php else: ?>

<div id="formulario">
    <form method="POST" name="ComporNoticia" action="<?php echo site_url('Noticias/updateNoticia');?>">
    <?php    
   foreach ($noticia as $value) {  
       
   ?>
        <div id="corpoNoticia">
            <textarea name="corpoNoticia"><?php echo set_value('corpoNoticia'); ?> <?php echo($value['body']);?></textarea>
            <div class="error" style="color: red;"><?php echo form_error('corpoNoticia'); ?></div>
    </div>
        
        <div id="formularioDireito">
            
        <p>
        <label>Titulo</label>
        <input name="titulo" type="text" value="<?php echo set_value('titulo'); ?> <?php echo($value['title']);?>" />
        </p>
        <div style="color: red;"><?php echo form_error('titulo'); ?></div>
         <p>
        <label>Especialidade</label>
        <select name="especialidades">
            
            <?php
                        foreach ($especialidades as $each) {
                            ?>
                            <option value="<?php echo($each['name']); ?>"> <?php echo($each['name']); ?></option>
                            <?php
                        }
                        ?>
        </select>
        </p>
        
        <p>
            <label>Imagem</label>
            <input type="file" />    
        </p>
        
        <p>
            <label>Resumo:</label>
            <input name="resumo" type="text" value="<?php echo set_value('resumo'); ?> <?php echo($value['abstract']);?>" />    
        </p>
       
        <div class="error" style="color: red;"><?php echo form_error('resumo'); ?></div>
        
        <div id="publicar">
            <input type="submit" value="Publicar" /> 
        </div>
        </div>
       <?php 
   }
   ?>
        
    </form>
</div>


<?php endif; ?>
