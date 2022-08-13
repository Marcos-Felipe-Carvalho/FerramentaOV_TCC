<?php
    checkAuthentication();
    function checkAuthentication(){
        if($_SESSION['login']){
            echo(<<<EOD
                "<script>
                alert('Faça o login para continuar');
                //window.location.href='../index.php'
                </script>")
                EOD);
        }
    }

?>