<?php
session_start();
include "../model/authentication/checkAuthentication.php";

/*chamar o controle com os resultados do banco*/
include "../model/list/listResultAnalysis.php"; //chama o controller que contém a função para obter os resultados do teste

$textAnalysis = getAnalysisResult(array($_SESSION['id_user']));

$testResult = getTestResult($_SESSION['id_user']);

$compileResultOpenness = getCompileResult($_SESSION['id_user']);

$compileExtraversion = getCompileResult($_SESSION['id_user']);

$compileEmotionalStability = getCompileResult($_SESSION['id_user']);

$compileAgreeableness = getCompileResult($_SESSION['id_user']);

$compileConscientiousness = getCompileResult($_SESSION['id_user']);

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paínel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1f1f1;
        }

        /* .chart{
            padding: 20px;
        }*/
        .card-title {
            font-size: 16px;
            text-align: center;
        }

        .container {
            margin-top: 30px;
        }

        tr,
        td {
            text-align: center;
        }

        img {
            width: 30px;
            height: 25px;
        }
    </style>
</head>

<body>
    <?php include "../view/navbar.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Análise de personalidade baseado na redação</h5>
                        <div class="chart" id="textAnalysis" style="width: 530px; height: 300px;"></div>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Análise de personalidade baseado no questionário</h5>
                        <div class="chart" id="testResult" style="width: 530px; height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <!-- Abertura à Experiência -->
            <div class="col-6">
                <div class="card p-1">
                    <h5 class="card-title">Abertura à Experiência</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Redação</th>
                                <th scope="col">Questionário</th>
                                <th scope="col">Variação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nível</td>
                                <td>Resultado</td>
                                <td>Resultado</td>
                                <td>Redação - Questionário</td>
                            </tr>
                            <?php
                            foreach ($compileResultOpenness as $result_openness) {
                            ?>
                                <tr>
                                    <td><?php echo $result_openness["openness_level"] ?></td>
                                    <td><?php echo $result_openness["openness_score"] ?></td>
                                    <td><?php echo number_format($result_openness["result_abertura_experiencias"], 2) ?></td>
                                    <td>
                                        <?php echo $result_openness["openness_score"] - number_format($result_openness["result_abertura_experiencias"], 2) ?>
                                        <?php
                                        if ($result_openness["openness_score"] > $result_openness["result_abertura_experiencias"]) { ?>
                                            <img src="../../app/assets/images/arrow_up.png" alt="" srcset="">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="../../app/assets/images/arrow_down.png" alt="" srcset="">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Extroversão -->
            <div class="col-6">
                <div class="card p-1">
                    <h5 class="card-title">Extroversão</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Redação</th>
                                <th scope="col">Questionário</th>
                                <th scope="col">Variação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nível</td>
                                <td>Resultado</td>
                                <td>Resultado</td>
                                <td>Redação - Questionário</td>
                            </tr>
                            <?php
                            foreach ($compileExtraversion as $result_extraversion) {
                            ?>
                                <tr>
                                    <td><?php echo $result_extraversion["extraversion_level"] ?></td>
                                    <td><?php echo $result_extraversion["extraversion_score"] ?></td>
                                    <td><?php echo number_format($result_extraversion["result_extroversao"], 2) ?></td>
                                    <td>
                                        <?php echo $result_extraversion["extraversion_score"] - number_format($result_extraversion["result_extroversao"], 2) ?>
                                        <?php
                                        if ($result_extraversion["extraversion_score"] > $result_extraversion["result_extroversao"]) { ?>
                                            <img src="../../app/assets/images/arrow_up.png" alt="" srcset="">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="../../app/assets/images/arrow_down.png" alt="" srcset="">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-3">

            <!-- Neuroticismo -->
            <div class="col-6">
                <div class="card p-1">
                    <h5 class="card-title">Neuroticismo</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Redação</th>
                                <th scope="col">Questionário</th>
                                <th scope="col">Variação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nível</td>
                                <td>Resultado</td>
                                <td>Resultado</td>
                                <td>Redação - Questionário</td>
                            </tr>
                            <?php
                            foreach ($compileEmotionalStability as $result_emotional_stability) {
                            ?>
                                <tr>
                                    <td><?php echo $result_emotional_stability["emotional_stability_level"] ?></td>
                                    <td><?php echo $result_emotional_stability["emotional_stability_score"] ?></td>
                                    <td><?php echo number_format($result_emotional_stability["result_neuroticismo"], 2) ?></td>
                                    <td>
                                        <?php echo $result_emotional_stability["emotional_stability_score"] - number_format($result_emotional_stability["result_neuroticismo"], 2) ?>
                                        <?php
                                        if ($result_emotional_stability["emotional_stability_score"] > $result_emotional_stability["result_neuroticismo"]) { ?>
                                            <img src="../../app/assets/images/arrow_up.png" alt="" srcset="">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="../../app/assets/images/arrow_down.png" alt="" srcset="">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Amabilidade -->
            <div class="col-6">
                <div class="card p-1">
                    <h5 class="card-title">Amabilidade</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Redação</th>
                                <th scope="col">Questionário</th>
                                <th scope="col">Variação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nível</td>
                                <td>Resultado</td>
                                <td>Resultado</td>
                                <td>Redação - Questionário</td>
                            </tr>
                            <?php
                            foreach ($compileAgreeableness as $result_agreeableness) {
                            ?>
                                <tr>
                                    <td><?php echo $result_agreeableness["agreeableness_level"] ?></td>
                                    <td><?php echo $result_agreeableness["agreeableness_score"] ?></td>
                                    <td><?php echo number_format($result_agreeableness["result_amabilidade"], 2) ?></td>
                                    <td>
                                        <?php echo $result_agreeableness["agreeableness_score"] - number_format($result_agreeableness["result_amabilidade"], 2) ?>
                                        <?php
                                        if ($result_agreeableness["agreeableness_score"] > $result_agreeableness["result_amabilidade"]) { ?>
                                            <img src="../../app/assets/images/arrow_up.png" alt="" srcset="">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="../../app/assets/images/arrow_down.png" alt="" srcset="">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="row mt-3">

            <!-- Conscienciosidade -->
            <div class="col-6">
                <div class="card p-1">
                    <h5 class="card-title">Conscienciosidade</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Redação</th>
                                <th scope="col">Questionário</th>
                                <th scope="col">Variação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nível</td>
                                <td>Resultado</td>
                                <td>Resultado</td>
                                <td>Redação - Questionário</td>
                            </tr>
                            <?php

                            foreach ($compileConscientiousness as $result_conscientiousness) {
                            ?>
                                <tr>
                                    <td><?php echo $result_conscientiousness["conscientiousness_level"] ?></td>
                                    <td><?php echo $result_conscientiousness["conscientiousness_score"] ?></td>
                                    <td><?php echo number_format($result_conscientiousness["result_conscienciosidade"], 2) ?></td>
                                    <td>
                                        <?php echo $result_conscientiousness["conscientiousness_score"] - number_format($result_conscientiousness["result_conscienciosidade"], 2) ?>
                                        <?php
                                        if ($result_conscientiousness["conscientiousness_score"] > $result_conscientiousness["result_conscienciosidade"]) { ?>
                                            <img src="../../app/assets/images/arrow_up.png" alt="" srcset="">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="../../app/assets/images/arrow_down.png" alt="" srcset="">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(textAnalysis);
        google.charts.setOnLoadCallback(testResult);
        
        function textAnalysis() {
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
                legend: {
                    position: 'top',
                    maxLines: 3
                },
            };

            var chart = new google.charts.Bar(document.getElementById('textAnalysis'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

        function testResult() {
            var data = google.visualization.arrayToDataTable([
                ['Análise da Redação', 'Abertura à Experiência', 'Extroversão', 'Neuroticismo', 'Amabilidade', 'Conscienciosidade'],
                <?php
                foreach ($testResult as $result) {
                ?>['Cinco grandes fatores de personalidade', <?php echo $result["result_abertura_experiencias"] ?>, <?php echo $result["result_extroversao"] ?>, <?php echo $result["result_neuroticismo"] ?>, <?php echo $result["result_amabilidade"] ?>, <?php echo $result["result_conscienciosidade"] ?>],

                <?php
                }
                ?>
            ]);
            var options = {
                legend: {
                    position: 'top',
                    maxLines: 3
                }
            }

            var chart = new google.charts.Bar(document.getElementById('testResult'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    </script>
</body>

</html>