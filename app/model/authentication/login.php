<?php
    /*Chama o controle para obter a função que faz o do usuário no banco de dados*/
    include '../../controller/userController.php';
        
    /*Obtém o arquivo para fazer a conexão com o banco de dados*/
    include "../../../config/connection.php";

    /*Obtém os parâmetros digitado pelo usuário no formulário*/
    $email = $_POST["email"];
    $password = md5($_POST["password"]); //criptografa a senha do usuário no formaro md5

    /*Verificar autenticação do usuário*/
    if(login(email:$email,password:$password)){
        echo(<<<EOD
            "<script>
                window.location.href='../../view/dashboard.php'
            </script>")
        EOD);
    }else{
        echo(<<<EOD
            "<script>
                alert('E-mail e/ou senha incorretos');
                window.location.href='../../index.php'
            </script>")
        EOD);
        
    }
?>