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
        $sql = "SELECT 
        SUM(ta.agreeableness_score)/2 agreeableness_score,
        SUM(ta.conscientiousness_score)/2 conscientiousness_score,
        SUM(ta.emotional_stability_score)/2 emotional_stability_score,
        SUM(ta.extraversion_score)/2 extraversion_score,
        SUM(ta.openness_score)/2 openness_score
     FROM 
         tb_analysis_text ta WHERE id_user = ?";
        $infoResult = connect() -> prepare($sql);
        $infoResult -> execute($result);
        return $infoResult;
        disconnect(); //Encerra a conexão com o banco de dados
    }
?>