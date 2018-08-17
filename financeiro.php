<?php session_start();
      include_once 'includes/header.inc.php';
      include_once 'includes/menu.inc.php'; ?> 
<!-- API de Gráfico do Google -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="row container">
  <p>&nbsp;</p>
  <form action="banco_de_dados/financeiro_model.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/graph.jpg" alt="(imagem)" width="100"></legend>
      <h5 class="light center">Configurações dos Gráficos</h5>

      <?php
        if(isset($_SESSION['msg'])):
          echo $_SESSION['msg'];
          session_unset();
        endif
      ?>

      <!-- CAMPO criterio -->  
      <div class ="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="criterio" maxlength="40" autofocus>
        <label for ="criterio">criterio</label>
      </div>
      
      <!-- dropdown -->
      <div class ="input-field col s12">
        <!-- Dropdown Trigger -->
        <a class='dropdown-trigger btn' data-target='dropdown1'>Categoria</a>
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li></ul>
      </div>

      <!-- BOTÕES -->
      <!-- <div class="input-field col s12">
        <input type="submit" value="Cadastrar" class="btn blue">
      </div> -->

    </fieldset>
  </form>     

  <p>&nbsp;</p>

  <!-- <legend><img src="imgs/avatar.png" alt="(imagem)" width="100"></legend> -->
  <fieldset class="formulario" style="padding: 15px">
    <!-- Div contendo o gráfico gerado -->
    <div style="">  
      <h5 class="light center">Gráfico Gasto/criterio</h5>
      <div id="piechart" style="width: 900px; height: 500px;"></div>  
    </div>  
  </fieldset>
 </div>

<?php 
echo $criterio;
echo '';
echo $link;
echo '';
echo $query;
echo '';
?>
