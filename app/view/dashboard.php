<?php
session_start();
include "../model/authentication/checkAuthentication.php";

/*chamar o controle com os resultados do banco*/
include "../model/list/listResultAnalysis.php"; //chama o controller que contém a função para obter os resultados do teste

$textAnalysis = getAnalysisResult(array($_SESSION['id_user']));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paínel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include "../view/navbar.php" ?>
    <div class="container">
    <div class="row">
        <div class="col">
            <div id="columnchart_material" style="width: 500px; height: 300px;"></div>
        </div>
    </div>
    </div>
   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Análise da Redação', 'Abertura à Experiência', 'Extroversão', 'Neuroticismo', 'Amabilidade', 'Conscienciosidade'],
                <?php
                foreach ($textAnalysis as $analysis) {
                ?>['Cinco grandes fatores de personalidade', <?php echo $analysis["openness_score"] ?>, <?php echo $analysis["extraversion_score"] ?>, <?php echo $analysis["emotional_stability_score"] ?>, <?php echo $analysis["agreeableness_score"] ?>, <?php echo $analysis["conscientiousness_score"] ?>],

                <?php
                }
                ?>
            ]);

            var options = {
                legend: { position: 'top', maxLines: 3 },
                chart: {
                    title: 'Análise de personalidade baseado na redação'
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</body>

</html>