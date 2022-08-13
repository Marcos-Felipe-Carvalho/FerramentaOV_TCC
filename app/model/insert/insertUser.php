<?php
    /*Chama o controle para obter a função que faz a inserção do usuário no banco de dados*/
    include '../../controller/userController.php';
    
    /*Obtém o arquivo para fazer a conexão com o banco de dados*/
    include "../../../config/connection.php";

    /*Obtém os parâmetros digitado pelo usuário no formulário*/
    $userName = $_POST["userName"];
    $profile = $_POST["profile"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]); //criptografa a senha do usuário no formaro md5
    
    /*Verificar se o usuário já está cadastrado*/
    if(!isRegistered(email:$email)){
        insertUser(userName:$userName, profile:$profile, email:$email, password:$password);
        echo(<<<EOD
            "<script>
                alert('Usuário cadastrado com sucesso.');
                window.location.href='../../index.php'
            </script>")
        EOD);
    }else{
        echo(<<<EOD
            "<script>
                alert('Usuário já cadastrado no banco de dados');
                window.location.href='../../view/register.php'
            </script>")
        EOD);
    }
?>