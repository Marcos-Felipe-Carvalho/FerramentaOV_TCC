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
    <form action="testeQ.php" method="POST">
        <?php
            foreach($infoTestQuestions as $key=>$question){
                echo ($key+1)."<br><br>";
                echo "<p>".($key+1)." - ".$question["question"]."<br>";
                echo "<input type='radio' id='tq_".($key+1)."' name='tq_".($key+1)."' value='1'>";
                echo "<label for='tq_".($key+1)."'>Discordo totalmente</label><br>";

                echo "<input type='radio' id='tq_".($key+1)."' name='tq_".($key+1)."' value='2'>";
                echo "<label for='tq_".($key+1)."'>Discordo</label><br>";

                echo "<input type='radio' id='tq_".($key+1)."' name='tq_".($key+1)."' value='3'>";
                echo "<label for='tq_".($key+1)."'>Não concordo nem discordo</label><br>";

                echo "<input type='radio' id='tq_".($key+1)."' name='tq_".($key+1)."' value='4'>";
                echo "<label for='tq_".($key+1)."'>Concordo</label><br>";

                echo "<input type='radio' id='tq_".($key+1)."' name='tq_".($key+1)."' value='5'>";
                echo "<label for='tq_".($key+1)."'>Concordo totalmente</label><br>";
            }
        ?>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>