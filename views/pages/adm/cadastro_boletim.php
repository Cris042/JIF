<?php 
     $boletim = \models\bd::selectAll('mensagen_reitoria');
     $boletim_dados = \models\bd::select('mensagen_reitoria');
     $cout = ceil(count($boletim));
?>
<div id="container"> 
    <?php if($cout == 0)  {?>     
        <section class="formulario">
            <h1>Cadastra Boletim</h1>

            <?php 
                if(@$_SESSION['mensagen'] == true);
                {
                    echo @$_SESSION['msn'];
                    unset($_SESSION['msn']);
                    @$_SESSION['mensagen'] = false;
                }          
            ?>


            <form method="post"  enctype="multipart/form-data" >
                
                <label for="mensagen">Mensagen</label>
                <textarea type="text" name="mensagen" required > </textarea>

                <label for="autor">Autor</label>
                <input type="text" name ="autor" required/>

                <label for="img">Logo</label>
                <input type="file" name = "imagem" required/>

                <label for="img">Documentos</label>
                <input multiple type="file" name="imagems[]" required/>


                <input type="submit" name="cadastra" value="enviar" />
            </form>
        </section><!-- formulario -->
    <?php } 
     else{
    ?>
         <section class="formulario">
            <h1>Editar Boletim</h1>

            <?php 
                if(@$_SESSION['mensagen'] == true);
                {
                    echo @$_SESSION['msn'];
                    unset($_SESSION['msn']);
                    @$_SESSION['mensagen'] = false;
                }          
            ?>


            <form method="post"  enctype="multipart/form-data" >
                
                <label for="mensagen">Mensagen</label>
                <textarea type="text" name="mensagen" value="<?php echo $boletim_dados[2] ?>" > <?php echo $boletim_dados[2] ?> </textarea>

                <label for="autor">Autor</label>
                <input type="text" name ="autor"  value="<?php echo $boletim_dados[3] ?>"/>

                <label for="img">Imagem</label>
                <input type="file" name = "imagem" />

                <label for="img">Documentos</label>
                <input multiple type="file" name="imagems[]" />

                <input type="hidden" name="id" value="<?php echo $boletim_dados[0] ?>" />
                
                <input type="submit" name="editar" value="enviar" />
            </form>
        </section><!-- formulario -->

     <?php } ?>
</div>