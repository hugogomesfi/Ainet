<?php  $this->load->view('Head');?>

<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',plugins: "image"});
</script>



<h1 class="titulo">ComporNoticia</h1>
<div id="formulario">
    <form method="POST">
        
        
        <div id="corpoNoticia">
        <textarea>Corpo da Noticia Aqui!</textarea>
    </div>
        
        <div id="formularioDireito">
            
        <p>
        <label>Titulo</label>
        <input type="text"/>
        </p>
         <p>
        <label>Especialidade</label>
        <select name="especialidades">
            <option value="volvo">Clinica geral</option>
            <option value="saab">Psicologia</option>
            <option value="fiat">Neurologia</option>
            <option value="audi">Reumatologia</option>
        </select>
        </p>
        
        <p>
            <label>Imagem</label>
            <input type="file" value="aaa"/>    
        </p>
        
        <p>
            <label>Resumo:</label>
            <input type="text" />    
        </p>
        
        <div id="publicar">
            <input type="submit" value="Publicar" /> 
        </div>
        </div>
        
        
    </form>
    </div>
    
</div>

<?php  $this->load->view('foot_Site.html');?>
