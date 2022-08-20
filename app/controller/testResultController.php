<?php
    function insertResult($result){ //Função para cadastrar as respostas no banco de dados
         //Conectando no banco de dados
         $sql = "INSERT INTO tb_test_result (id_user, id_question, result) VALUES(?,?,?)"; //comando para cadastrar o usuário no banco
         $infoResult = connect() -> prepare($sql);
         $infoResult -> execute($result);
         disconnect(); //Encerra a conexão com o banco de dados
    }
?>