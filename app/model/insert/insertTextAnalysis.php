<?php
    session_start();
    
    /*Chama o controle para obter a função que faz a inserção da análise no banco de dados*/
    include '../../controller/textAnalysisController.php';
    
    /*Obtém o arquivo para fazer a conexão com o banco de dados*/
    include "../../../config/connection.php";
    
    if(countAnalysis( $_SESSION['id_user'])>0){
        echo <<<EOD
        <script>
            alert('Você já realizou o teste anteriormente. Acesse a página inicial para visualizar o resultado');
           window.location.href='../../view/dashboard.php'
        </script>
    EOD;
    }else{
        insertAnalysisText(
            array(
                $_SESSION['id_user'],
                $_GET["user_api"],
                $_GET["agreeableness_level"],
                $_GET["conscientiousness_level"],
                $_GET["emotional_stability_level"],
                $_GET["extraversion_level"],
                $_GET["openness_level"],
                $_GET["agreeableness_score"],
                $_GET["conscientiousness_score"],
                $_GET["emotional_stability_score"],
                $_GET["extraversion_score"],
                $_GET["openness_score"],
                $_GET["about_me"]
            )
        );
        echo <<<EOD
        <script>
            alert('Teste realizado com sucesso.  Acesse a página inicial para visualizar o resultado');
           window.location.href='../../view/dashboard.php'
        </script>"
        EOD;
    }
?>