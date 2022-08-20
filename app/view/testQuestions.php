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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color: #d9dad5;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="../model/insert/insertResult.php" method="POST">
            <?php
                foreach($infoTestQuestions as $key=>$question){
                echo "<input type='text' name='qid_".$question["id_question"]."' value='".$question["id_question"]."' readonly style='display:none'>"
            ?>
               
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ($key+1)." - ".$question["question"] ?></h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo "tq_".($key + 1) ?>" id="discordo_totalmente" value="1" required>
                            <label class="form-check-label" for="discordo_totalmente">
                                Discordo totalmente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo "tq_".($key + 1) ?>" id="discordo" value="2">
                            <label class="form-check-label" for="discordo">
                                Discordo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo "tq_".($key + 1) ?>" id="nao_concordo_discordo" value="3">
                            <label class="form-check-label" for="nao_concordo_discordo">
                                Não concordo nem discordo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo "tq_".($key + 1) ?>" id="concordo" value="4">
                            <label class="form-check-label" for="concordo">
                                Concordo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?php echo "tq_".($key + 1) ?>" id="concordo_totalmente" value="5">
                            <label class="form-check-label" for="concordo_totalmente">
                                Concordo totalmente
                            </label>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="row mt-3 mb-4">
                <div class="col text-center">
                    <input  class="btn btn-primary" type="submit" value="SALVAR RESPOSTAS">
                </div>
            </div>
        </form>
    </div>
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>