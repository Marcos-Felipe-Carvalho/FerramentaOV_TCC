<?php

    function countAnalysis($userId){
        $sql = "select id_analysys_text,id_user from tb_analysis_text where id_user=?";
        $infoAnalysis = connect() -> prepare($sql);
        $infoAnalysis -> execute([$userId]);
        $countInfoAnalysis = $infoAnalysis -> rowCount();
        return $countInfoAnalysis;
    }

    function insertAnalysisText($result){
        //Conectando no banco de dados
        $sql = "INSERT INTO tb_analysis_text(id_user,user_api,agreeableness_level,conscientiousness_level,emotional_stability_level,extraversion_level,openness_level,agreeableness_score,conscientiousness_score,emotional_stability_score,extraversion_score,openness_score,about_me) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)"; //comando para cadastrar a análise no banco
        $infoResult = connect() -> prepare($sql);
        $infoResult -> execute($result);
        disconnect(); //Encerra a conexão com o banco de dados
    }

    function getAnalysisResult($result){
        $sql = "SELECT ta.agreeableness_score ,ta.conscientiousness_score ,ta.emotional_stability_score ,ta.extraversion_score ,ta.openness_score FROM tb_analysis_text ta WHERE id_user = ?";
        $infoResult = connect() -> prepare($sql);
        $infoResult -> execute($result);
        return $infoResult;
        disconnect(); //Encerra a conexão com o banco de dados
    }
?>