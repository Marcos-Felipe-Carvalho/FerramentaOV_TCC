<?php   
    session_start();
    include "../model/authentication/checkAuthentication.php"; //Checar se o usuário fez o login

    include "../model/list/listTestQuestions.php"; //chama o controller que contém a função para obter as questões do teste
    $infoTestQuestions = getTestQuestions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões - Modelo Big Five</title>
</head>
<body>
    <?php
        foreach($infoTestQuestions as $question){
            echo "<p>".$question["id_question"]." - ".$question["question"]."<br>";
            echo "<input type='radio' id='tq_".$question["id_question"]."' name='tq_".$question["id_question"]."' value='Discordo totalmente'>";
            echo "<label for='tq_".$question["id_question"]."'>Discordo totalmente</label><br>";

            echo "<input type='radio' id='tq_".$question["id_question"]."' name='tq_".$question["id_question"]."' value='Discordo'>";
            echo "<label for='tq_".$question["id_question"]."'>Discordo</label><br>";

            echo "<input type='radio' id='tq_".$question["id_question"]."' name='tq_".$question["id_question"]."' value='Não concordo nem discordo'>";
            echo "<label for='tq_".$question["id_question"]."'>Não concordo nem discordo</label><br>";

            echo "<input type='radio' id='tq_".$question["id_question"]."' name='tq_".$question["id_question"]."' value='Concordo'>";
            echo "<label for='tq_".$question["id_question"]."'>Concordo</label><br>";

            echo "<input type='radio' id='tq_".$question["id_question"]."' name='tq_".$question["id_question"]."' value='Concordo totalmente'>";
            echo "<label for='tq_".$question["id_question"]."'>Concordo totalmente</label><br>";
        }
    ?>
</body>
</html>