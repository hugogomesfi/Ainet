<?php $this->load->view('Head'); ?>

<script type="text/javascript">



    $(document).ready(function() {


        $('[class^="question"]').on('click', function(e) {
            e.preventDefault();
            var numb = this.className.replace('question', '');
            $("html, body").animate({scrollTop: 0}, 600);
            $('[id^="answer"]').hide();
            $('#answer' + numb).show("slow");
            return false;
        });

    });

</script>

<div id="especialidades">
    <ul>
        <li class="question1">ACUMPUNTURA</li>
        <li class="question2"> AUDIOLOGIA</li>
        <li class="question3"> CARDIOLOGIA</li>
        <li class="question4"> CIRURGIA GERAL </li>
        <li class="question5"> DOENÇAS VENOSAS</li>
        <li class="question6"> CIRURGIA PLÁSTICA</li>
        <li class="question7"> CIRURGIA VASCULAR</li>
        <li class="question8"> CLÍNICA GERAL</li>
        <li class="question9"> DERMATOLOGIA</li>
        <li class="question10"> ENDOCRINOLOGIA</li>
        <li class="question11"> MEDICINA DENTÁRIA</li>
        <li class="question12"> FISIATRIA</li>
        <li class="question13"> GASTRENTEROLOGIA</li>
        <li class="question14"> GINECOLOGIA / OBSTETRICIA</li>
        <li class="question15">MEDICINA INTERNA</li>
        <li class="question16">MEDICINA DESPORTIVA </li>
        <li class="question17">NEUROCIRURGIA </li>
        <li class="question18">NEUROLOGIA</li>
        <li class="question19">NUTRIÇÃO</li>
        <li class="question20">OFTALMOLOGIA</li>
        <li class="question21">OTORRINOLARINGOLOGIA</li>
        <li class="question22">ORTOPEDIA</li>
        <li class="question23">PNEUMOLOGIA</li>
        <li class="question24">PSICOLOGIA</li>
        <li class="question25">PSIQUIATRIA</li>
        <li class="question26">REUMATOLOGIA</li>
        <li class="question27">UROLOGIA</li>
        <li class="question28"><a id="link">ELETROMIOGRAFIA</a></li>
    </ul>
    <div id="especialidadeCorpo">
        <div class="clear" class="question"></div>
        <div id="answer1">Acumpuntura asdkadadoasd sdsajjdasjd asddhhaosdoasd gsdgdga asdgf asdg asdfg asdfgasdgsd ag             sdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff ffffffffffffffffffffffffffffffffffff asdg adgag awtg asidkasdjlassldnasld asdjaslkdlas</div>
        <div id="answer2">audiologoa sadasfass asf dsf s df sdg dhdfsa f ds f sd f sd fas</div>
        <div id="answer3">3 <div class="noticias">
                                            <div class="noticiasEsq">
                                                <div id="noticeTitle">
                                                    <h4>Ambulância avariou a caminho de hospital</h4>
                                                </div>
                                                <a href='<?php echo site_url('/NoticiaGrande/index'); ?>' alt=" " >
                                                    <img src="Styles/Images/n_.jpg"></img>
                                                </a>
                                                <div id="noticeDate">
                                                    <span>05/04/2014</span>
                                                </div>
                                            </div>

                                            <div class="noticiasDir">
                                                <div id="noticeSpecialidade">
                                                    <h6>Ginecologia</h6>
                                                    <div class="linhaHugo"></div>
                                                </div>
                                                <div id="noticeText">
                                                    <span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines detectou um sinal rádio com uma frequência de 37.5kHz por segundo - a mesma que teriam as caixas negras da aeronave. No entanto, não há ainda confirmação se este sinal estará relacionado com o avião despaarecido há quatro semanas quando voava de Kuala Lumpur para Pequim.</span>
                                                </div>
                                                <div id="noticeAuthor">
                                                    <span>Dr Manel Da Costa</span>
                                                    <a href='<?php echo site_url('/NoticiaGrande/index'); ?>' alt=" " >
                                                        <input id="btnNoticias" type="button" value="Ler mais" alt="ler mais">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="noticias">
                                        <div class="noticiasEsq">
                                            <div id="noticeTitle">
                                                <h4>Ambulância avariou a caminho de hospital</h4>
                                            </div>
                                            <a href=" " alt=" " >
                                                <img src="Styles/Images/n_.jpg"></img>
                                            </a>
                                            <div id="noticeDate">
                                                <span>05/04/2014</span>
                                            </div>
                                        </div>

                                        <div class="noticiasDir">
                                            <div id="noticeSpecialidade">
                                                <h6>Ginecologia</h6>
                                                <div class="linhaHugo"></div>
                                            </div>
                                            <div id="noticeText">
                                                <span>Um navio chinês envolvido na busca do Boeing 777 da Malaysia Airlines detectou um sinal rádio com uma frequência de 37.5kHz por segundo - a mesma que teriam as caixas negras da aeronave. No entanto, não há ainda confirmação se este sinal estará relacionado com o avião despaarecido há quatro semanas quando voava de Kuala Lumpur para Pequim.</span>
                                            </div>
                                            <div id="noticeAuthor">
                                                <span>Dr Manel Da Costa</span>
                                                <a href='<?php echo site_url('/NoticiaGrande/index');?>' alt=" " >
                                                    <input id="btnNoticias" type="button" value="Ler mais" alt="ler mais">
                                                </a>
                                            </div>
                                        </div>
</div>
        
        </div>
        <div id="answer4">4</div>
        <div id="answer5">5</div>
        <div id="answer6">6</div>
        <div id="answer7">7</div>
        <div id="answer8">8</div>
        <div id="answer9">9</div>
        <div id="answer10">10</div>
        <div id="answer11">11</div>
        <div id="answer12">12</div>
        <div id="answer13">13</div>
        <div id="answer14">14</div>
        <div id="answer15">15</div>
        <div id="answer16">16</div>
        <div id="answer17">17</div>
        <div id="answer18">18</div>
        <div id="answer19">19</div>
        <div id="answer20">20</div>
        <div id="answer21">21</div>
        <div id="answer22">22</div>
        <div id="answer23">23</div>
        <div id="answer24">24</div>
        <div id="answer25">25</div>
        <div id="answer26">26</div>
        <div id="answer27">27</div>
        <div id="answer28">28</div>

        <div class="new_member_box_display" id="answer">Text will appear here when one of the tabs above is clicked</div>

    </div>
</div>
</div>


<?php $this->load->view('foot_Site.html'); ?>