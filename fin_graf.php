<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<?php include_once 'banco_de_dados/graf_model.php'?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/graf.jpg" alt="(imagem)" width="100"></legend>
      <h3 class="light center">Gráfico de Pizza</h3>  
    
    <div id="piechart" align="center" style="width: 900px; height: 500px;"></div>  

    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
