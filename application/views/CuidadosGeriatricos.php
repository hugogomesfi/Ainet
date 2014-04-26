<?php $this->load->view('Head'); ?>


<script type="text/javascript">


    //ctrl + H para substituir varias palavras ao mesmo tempo 


    $(document).ready(function() {

        $("li").click(function() {
            $("li").removeClass("activa").addClass("naoActiva");
//                var nome = document.getElementsByTagName("li")[0];

//                });
            $(this).addClass("activa");

        });
    });
    function mudaResidencial() {
        $("#artigoLar").hide();
        $("#artigoDomiciliario").hide();
        $("#artigoInternamento").hide();
        $("#artigoResidencial").show();
    }

    function mudalLar() {
        $("#artigoLar").show();
        $("#artigoDomiciliario").hide();
        $("#artigoInternamento").hide();
        $("#artigoResidencial").hide();
    }

    function mudaInternamento() {
        $("#artigoLar").hide();
        $("#artigoDomiciliario").hide();
        $("#artigoInternamento").show();
        $("#artigoResidencial").hide();
    }

    function mudaDomiciliario() {
        $("#artigoLar").hide();
        $("#artigoDomiciliario").show();
        $("#artigoInternamento").hide();
        $("#artigoResidencial").hide();
    }

</script>



<header>
    <h1 class="titulo">Cuidados Geriátricos</h1>
</header>


<div id="pagGeriatricos">


    <section>
        <ul class="tab">
            <li class="activa" onclick="mudaResidencial()"><a  >Residencial</a></li>
            <li class="naoActiva" onclick="mudalLar()"><a  >Lar</a></li>
            <li class="naoActiva" onclick="mudaInternamento()"><a >Internamento</a></li>
            <li class="naoActiva" onclick="mudaDomiciliario()"><a  >Apoio Domiciliário</a></li>
        </ul>
    </section>

    <section id="seccaoPagGer">
        <article id="artigoResidencial" class="aspecto">
            <p>A Residencial é o local ideal para quem pretende uma opção de repouso de cariz familiar, onde a personalidade de cada utente determina o atendimento dos diversos profissionais desta unidade. O edifício, localizado na Rua do Lis junto às instalações do Hospital Dom Manuel de Aguiar, proporciona aos seus utentes elevados padrões de qualidade ao nível dos serviços que presta.</p>
            <input class="btnNoticias" type="button" value="Ir para Residencial" onclick="">
            
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>

        <article id="artigoLar" class="aspecto">
            <p>O Lar N. S. da Encarnação ocupa uma área de construção de 5.000 metros quadrados com espaços ajardinados envolventes. O edifício e seu equipamento são considerados do mais moderno e funcional que se tem feito até hoje no nosso país.</p>
            <input class="btnNoticias" type="button" value="Ir para Lar" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>


        <article id="artigoInternamento" class="aspecto">
            <p>São interlocutores de diferentes gerações, diferentes disciplinas, homens e mulheres, de esquerda e de direita, figuras públicas e anónimas. Identificámos com eles as decisões políticas que nos conduziram ao ponto em que estamos. Foi um modo de interrogar como se fez um país democrático. </p>
            <input class="btnNoticias" type="button" value="Ir para Internamento" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>  
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>

        <article id="artigoDomiciliario" class="aspecto">
            <p>Apostando em elevados padrões de qualidade, quer no que toca à execução da obra física, quer no domínio do equipamento instalado e dos recursos humanos, pretende-se que a creche se assuma em Leiria como um espaço de referência qualitativa na área pueril, contando com uma estrutura de recursos humanos empenhada e com experiência consolidada no domínio infantil.</p>
            <input class="btnNoticias" type="button" value="Ir para Apoio Domiciliário" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>
    </section>  

</div>





</div>


<?php

$this->load->view('foot_Site');
