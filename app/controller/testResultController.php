<?php
    function insertResult($result)
    { //Função para cadastrar as respostas no banco de dados
        //Conectando no banco de dados
        $sql = "INSERT INTO tb_test_result (id_user, id_question, result) VALUES(?,?,?)"; //comando para cadastrar o usuário no banco
        $infoResult = connect()->prepare($sql);
        $infoResult->execute($result);
        disconnect(); //Encerra a conexão com o banco de dados
    }

    function getTestResult($idUser)
    {
        $sql = '
        SELECT extroversao.result_extroversao,
        amabilidade.result_amabilidade,
        abertura_experiencias.result_abertura_experiencias,
        conscienciosidade.result_conscienciosidade,
        neuroticismo.result_neuroticismo
    FROM (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 6 THEN 6 - tr.result
                        WHEN tq.id_question = 21 THEN 6 - tr.result
                        WHEN tq.id_question = 31 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_extroversao
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Extroversão"
            AND tu.id_user = 9
        ) extroversao
        INNER JOIN(
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 2 THEN 6 - tr.result
                        WHEN tq.id_question = 12 THEN 6 - tr.result
                        WHEN tq.id_question = 27 THEN 6 - tr.result
                        WHEN tq.id_question = 37 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_amabilidade
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Amabilidade"
            AND tu.id_user = 9
        ) amabilidade ON extroversao.id_user = amabilidade.id_user
        INNER JOIN (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 35 THEN 6 - tr.result
                        WHEN tq.id_question = 41 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_abertura_experiencias
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Abertura a Experiências"
            AND tu.id_user = 9
        ) abertura_experiencias ON amabilidade.id_user = abertura_experiencias.id_user
        INNER JOIN (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 8 THEN 6 - tr.result
                        WHEN tq.id_question = 18 THEN 6 - tr.result
                        WHEN tq.id_question = 23 THEN 6 - tr.result
                        WHEN tq.id_question = 43 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_conscienciosidade
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Conscienciosidade"
            AND tu.id_user = 9
        ) conscienciosidade ON abertura_experiencias.id_user = conscienciosidade.id_user
        INNER JOIN (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 4 THEN 6 - tr.result
                        WHEN tq.id_question = 14 THEN 6 - tr.result
                        WHEN tq.id_question = 19 THEN 6 - tr.result
                        WHEN tq.id_question = 29 THEN 6 - tr.result
                        WHEN tq.id_question = 39 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_neuroticismo
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Neuroticismo"
            AND tu.id_user = 9
        ) neuroticismo on conscienciosidade.id_user = neuroticismo.id_user


    WHERE
        neuroticismo.id_user = 9
                    ';
                    $infoResult = connect()->prepare($sql);
                            $infoResult->execute(/*array($idUser,$idUser,$idUser,$idUser,$idUser,$idUser,$idUser,$idUser)*/);
                    disconnect(); //Encerra a conexão com o banco de dados
                    return $infoResult;
        
    }

    function getCompileResult($idUser){
        $sql = '
        SELECT
        dados_usuario.id_user
        ,dados_usuario.name
        ,dados_teste.result_extroversao
        ,dados_teste.result_amabilidade
        ,dados_teste.result_abertura_experiencias
        ,dados_teste.result_conscienciosidade
        ,dados_teste.result_neuroticismo
        ,dados_redacao.agreeableness_level
        ,dados_redacao.agreeableness_score
        ,dados_redacao.conscientiousness_level
        ,dados_redacao.conscientiousness_score
        ,dados_redacao.emotional_stability_level
        ,dados_redacao.emotional_stability_score
        ,dados_redacao.extraversion_level
        ,dados_redacao.extraversion_score
        ,dados_redacao.openness_level
        ,dados_redacao.openness_score
    FROM
    (
        SELECT 
            tu.id_user
            ,tu.name
        FROM 
            tb_users tu
        WHERE 
            tu.profile = "Entrevistado/Orientado" 
    ) dados_usuario
    LEFT JOIN
    (
        /*QUERY PARA CALCULAR OS RESULTADOS DO BIG FIVE*/
        SELECT 
            extroversao.id_user
            ,extroversao.result_extroversao
            ,amabilidade.result_amabilidade
            ,abertura_experiencias.result_abertura_experiencias
            ,conscienciosidade.result_conscienciosidade
            ,neuroticismo.result_neuroticismo
        FROM 
        (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 6 THEN 6 - tr.result
                        WHEN tq.id_question = 21 THEN 6 - tr.result
                        WHEN tq.id_question = 31 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_extroversao
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Extroversão"
            AND tu.id_user=?
        ) extroversao
        INNER JOIN
        (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 2 THEN 6 - tr.result
                        WHEN tq.id_question = 12 THEN 6 - tr.result
                        WHEN tq.id_question = 27 THEN 6 - tr.result
                        WHEN tq.id_question = 37 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_amabilidade
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Amabilidade"
            AND tu.id_user=?
        ) amabilidade ON extroversao.id_user = amabilidade.id_user
        INNER JOIN 
        (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 35 THEN 6 - tr.result
                        WHEN tq.id_question = 41 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_abertura_experiencias
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Abertura a Experiências"
            AND tu.id_user=?
    
        ) abertura_experiencias ON amabilidade.id_user = abertura_experiencias.id_user
        INNER JOIN 
        (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 8 THEN 6 - tr.result
                        WHEN tq.id_question = 18 THEN 6 - tr.result
                        WHEN tq.id_question = 23 THEN 6 - tr.result
                        WHEN tq.id_question = 43 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_conscienciosidade
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Conscienciosidade"
            AND tu.id_user=?
    
        ) conscienciosidade ON abertura_experiencias.id_user = conscienciosidade.id_user
        INNER JOIN 
        (
            SELECT tu.id_user,
                SUM(
                    CASE
                        WHEN tq.id_question = 4 THEN 6 - tr.result
                        WHEN tq.id_question = 14 THEN 6 - tr.result
                        WHEN tq.id_question = 19 THEN 6 - tr.result
                        WHEN tq.id_question = 29 THEN 6 - tr.result
                        WHEN tq.id_question = 39 THEN 6 - tr.result
                        ELSE tr.result
                    END
                ) / COUNT(tq.id_question) result_neuroticismo
            FROM tb_test_result tr
                INNER JOIN tb_users tu ON tu.id_user = tr.id_user
                INNER JOIN tb_test_questions tq ON tr.id_question = tq.id_question
                INNER JOIN tb_category tc ON tc.id_category = tq.id_category
            WHERE tc.category = "Neuroticismo"
            AND tu.id_user=?
    
        ) neuroticismo on conscienciosidade.id_user = neuroticismo.id_user
    
    
    ) dados_teste
    ON dados_teste.id_user = dados_usuario.id_user
    LEFT JOIN
    (
        SELECT
            ta.id_user
            ,ta.agreeableness_level
            ,SUM(ta.agreeableness_score)/2 agreeableness_score
            ,ta.conscientiousness_level
            ,SUM(ta.conscientiousness_score)/2 conscientiousness_score
            ,ta.emotional_stability_level
            ,SUM(ta.emotional_stability_score)/2 emotional_stability_score
            ,ta.extraversion_level
            ,SUM(ta.extraversion_score)/2 extraversion_score
            ,ta.openness_level
            ,SUM(ta.openness_score)/2 openness_score
        FROM
            tb_analysis_text ta
        WHERE
            ta.id_user = ?
    ) dados_redacao
    ON dados_redacao.id_user = dados_usuario.id_user
    WHERE
        dados_usuario.id_user = ?
        ';
        $infoResult = connect()->prepare($sql);
    $infoResult->execute(array($idUser,$idUser,$idUser,$idUser,$idUser,$idUser,$idUser));
        disconnect(); //Encerra a conexão com o banco de dados
        return $infoResult;
    }

?>