<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Gráfico de Barras</title>
</head>
<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

    <?php
        $dados = [5,2,24,48,8];
        $task = ['Estudar','Comer', 'Me estressar', 'Assistir série','Dormir'];
        $tam = count($task);
    
    ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
            for($i=0;$i<$tam;$i++){
                ?>
                    ['<?= $task[$i]; ?>', <?= $dados[$i];?>],
                <?php
            }
          ?>
        ]);

        var options = {
          title: 'Minhas Atividades Diárias',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
        
</body>
</html>