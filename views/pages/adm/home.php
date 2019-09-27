<?php 
     $boletim = \models\bd::selectAll('mensagen_reitoria');
     $jogos = \models\bd::selectAll('jogo');
     $cout = ceil(count($boletim));
?>
<div id="container"> 
    <div class="txt">
            <h3 class="text-center"> Lorem Ipsum  </h3><br><br>
            <p>
              orem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. 
              Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora
               desconhecida pegou uma galera do tipo 
              e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos,
               mas também o salto para a composição eletrônica, permanecendo 
              essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de
               Letraset contendo passagens de Lorem Ipsum e, mais recentemente, 
              com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.
              orem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. 
              Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora
               desconhecida pegou uma galera do tipo 
              e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos,
               mas também o salto para a composição eletrônica, permanecendo 
              essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de
               Letraset contendo passagens de Lorem Ipsum e, mais recentemente, 
              com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.
              orem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. 
              Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora
               desconhecida pegou uma galera do tipo 
              e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos,
               mas também o salto para a composição eletrônica, permanecendo 
              essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de
               Letraset contendo passagens de Lorem Ipsum e, mais recentemente, 
              com software de editoração eletrônica como o Aldus PageMaker, incluindo versões do Lorem Ipsum.
            </P>
    </div><!--txt-->
<?php if($cout != 0) { ?>
    <div class="wraper-table">            
        <table>    
           
            <tr>  
                <th class="text-center"> 
                       <P>Boletim</p>
                </th> 

                <th class="text-center"> 
                        <P>descriçao</p>
                </th> 
                
                <th class="text-center"> 
                        <button type="button" id="btn_comunicado" class="btn btn-success">
                                <a href="models/pdf/boletim.php">Baixar</a>
                        </button> 
                </th> 

            </tr>

        </table>  
    <div><!--wrapper-table-->
   
<?php }?>

         
</div><!-- container -->
 
