<!--  
 // $connect = mysqli_connect("localhost", "root", "", "db_cadastro");  
 include_once "..\conexao.php"; -->

 <?php include_once 'conexao.php';

//Configuração da categoria do gráfico ser gerado
 $tb = 'fin_mov';
 $cat = 'valor'; 
 $titulo = 'Gráfico de torta colorido!';

//Select no banco
 $query = "SELECT $cat, count(*) as number FROM $tb GROUP BY $cat";  
 $result = mysqli_query($link, $query);  
 ?>  


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