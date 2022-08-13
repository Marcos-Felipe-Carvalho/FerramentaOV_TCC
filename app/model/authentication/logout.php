<?php
    /*Chama o controle para obter a função que faz o do usuário no banco de dados*/
    include '../../controller/userController.php';

    session_start();//inicia a sessão para obter os parâmetros da sessão
    
    logout(); // chama a função para fazer o logout do usuário
    echo(<<<EOD
    <script>
     window.location.href='../../index.php'
    </script>)
    EOD);
?>