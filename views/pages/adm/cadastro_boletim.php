<?php 
     $boletim = \models\bd::select('mensagen_reitoria');
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

                <label for="img">Imagem</label>
                <input type="file" name = "imagem" required/>


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
                <textarea type="text" name="mensagen" value="<?php echo $boletim[2] ?>" > <?php echo $boletim[2] ?> </textarea>

                <label for="autor">Autor</label>
                <input type="text" name ="autor"  value="<?php echo $boletim[3] ?>"/>

                <label for="img">Imagem</label>
                <input type="file" name = "imagem" />

                <input type="hidden" name="imgatual" value="<?php echo $boletim[1] ?>" />
                <input type="hidden" name="id" value="<?php echo $boletim[0] ?>" />
                
                <input type="submit" name="editar" value="enviar" />
            </form>
        </section><!-- formulario -->

     <?php } ?>
</div>