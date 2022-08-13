<?php
    /* Função para verificar se o usuário já realizoou login */
    checkAuthentication();

    function checkAuthentication(){
        if(!isset($_SESSION['login'])){//Se o usuário não realizou login retorna para a página inicial
            echo(<<<EOD
                <script>
                alert('Faça o login para continuar');
                 window.location.href='../index.php'
                </script>)
                EOD);
        }
    }

?>