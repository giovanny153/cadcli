<?php
session_start()
?>
<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>  
<!-- php include_once 'banco_de_dados/graf_model.php'  -->
<?php 
echo $categoria;
echo "";
echo $tb;
?>
<div class="row container">
  <p>&nbsp;</p>  
  <form action="banco_de_dados/graf_model.php" method="POST">
    <fieldset class="formulario" style="padding: 15px">
      <div class="input-field col s6">
        <i class="material-icons prefix">reorder</i>
        <select name='categoria' id='categoria'>
          <option value="<?php echo $categoria ?>" disabled selected></option>
          <option value="conta">Conta</option>
          <option value="categoria">Categoria</option>
        </select>
		<label>Coluna</label>

       <div class="input-field col s12">
        <input type="submit" value="Alterar" class="btn blue">
        <!-- <input type="submit" value="Limpar" class="btn red"> -->
      </div>
    

    
      <!-- <div class="input-field col s6">
        <i class="material-icons prefix">poll</i>
        <select name='categoria'>
          <option value="<?php echo $categoria ?>" disabled selected></option>
          <option value="Burguer King">Conta</option>
          <option value="Subway">Categoria</option>
          <option value="McDonalds">Mês</option>
        </select>
        <label>Coluna</label>       
      </div> -->

      </fieldset>
    </form>
  
</div>

<div class="row container">
  <p>&nbsp;</p>
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imgs/graf.jpg" alt="(imagem)" width="100"></legend>
      <h3 class="light center">Gráfico de Pizza</h3>  
    
    <div id="piechart" align="center" style="width: 900px; height: 500px;"></div>  

    </fieldset>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
google.charts.load('current', {'packages':['corechart']});  
google.charts.setOnLoadCallback(drawChart);  
function drawChart()  
{  
  var data = google.visualization.arrayToDataTable([  
            ['Gender', 'Number'],  
            <?php  
            while($row = mysqli_fetch_array($result))  
            {  
                 echo "['".$row["$cat"]."', ".$row["number"]."],";  
            }  
            ?>  
       ]);  
  var options = {  
        // title: '<?php echo $titulo ?>',  
        is3D:true 
        // pieHole: 0.4  
       };  
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
  chart.draw(data, options);  
}  
</script>

<?php include_once 'includes/footer.inc.php' ?>
