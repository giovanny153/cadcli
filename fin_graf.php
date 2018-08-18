<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<?php include_once 'banco_de_dados/graf/graf_model.php'?>  


<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/create.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/graf.jpg" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Gráfico</h5>

      <div style="width:900px;">  
    <h3 align="center">Teste de Gráfico</h3>  
    <br />  
    <div id="piechart" style="width: 900px; height: 500px;"></div>  
</div>  


    </fieldset>
  </form>
</div>

<?php include_once 'includes/footer.inc.php' ?>
