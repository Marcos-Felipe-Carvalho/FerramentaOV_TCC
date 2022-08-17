<?php

     /*Função para retornar a lista de questões do banco*/
    function getTestQuestions(){
        $sql = "SELECT tq.id_question, tq.question FROM tb_test_questions tq"; //comando sql para obter o id e questão da tabela do banco
        $infoTestQuestions =  connect() -> prepare($sql);
        $infoTestQuestions -> execute(); //Encerra a conexão com o banco de dados 

        return $infoTestQuestions; //retorna as informações do banco

        disconnect(); //Encerra a conexão com o banco de dados
    }
?>