<?php    
    session_start();

    /*Chama o controle para obter a função que faz a inserção do resultado no banco de dados*/
    include '../../controller/testResultController.php';

    /*Obtém o arquivo para fazer a conexão com o banco de dados*/
    include "../../../config/connection.php";
    
    $result = array(); //vetor para armazenar os resultados que o usuário fornecer
    $questionId = array(); //vetor para armazenar os id's das questões

    for($i=1; $i<=44; $i++){
        $result[$i]     =  $_POST["tq_".$i];
        $questionId[$i] =  $_POST["qid_".$i];
        insertResult(array($_SESSION['id_user'], $questionId[$i], $result[$i])); //chama a função para cadastrar as respostas no banco
    }
    echo(<<<EOD
        <script>
            alert('Formulário de resposta cadastrado com sucesso');
            window.location.href='../../view/dashboard.php'
        </script>
    EOD);
?>  