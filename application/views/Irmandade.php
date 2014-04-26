<?php $this->load->view('Head'); ?>

<div class="tituloCrecheIrmandade"><h1>Irmandade</h1></div>

<div id="publicacaoMedicos">
    <div class="publicacao" id="pub_1">
        <img src="Styles/Images/medicin_1.jpg" alt="imagem de publicacao"/>
        <h5>Medicamentos</h5>
        <div class="resumo_noticia"><p>
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 
                Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo.       
            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div>  



    <div class="publicacao" id="pub_2">
        <img src="Styles/Images/medicin_2.jpg" alt="imagem de publicacao" />
        <h5>Novidades</h5>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div> 


    <div class="publicacao" id="pub_3">
        <img src="Styles/Images/medicin_3.jpg" alt="imagem de publicacao"/>
        <h5>Genericos</h5>
        <div class="resumo_noticia"><p>Lorem ipsum dolor sit amet,, imperdiet a, venenatis vitae, justo. 

            </p></div>
        <div>
            <input type="button" value="Ler Mais" class="btnpub"/>
        </div>
    </div> 

</div>

<div id="LerMaisNoticias">
    <a href='<?php echo site_url('/NoticiaGrande')?> '>Ler mais Noticias</a>
</div>
<div>
       <section>
        <article id="info">
            <h5>Necessita de mais informaçoes?</h5>
            <a href="">Contacte-nos</a> 
        </article>
    </section>
</div>

</div>
<?php $this->load->view('foot_Site');