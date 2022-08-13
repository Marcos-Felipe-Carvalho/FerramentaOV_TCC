<?php

    /*Função para inserir o usuário no banco de dados*/
    function insertUser($userName, $profile, $email, $password){
        //Conectando no banco de dados
        $sql = "INSERT INTO tb_users (name, email, password, profile) VALUES(?,?,?,?)"; //comando para cadastrar o usuário no banco
        $infoUser = connect() -> prepare($sql);
        $infoUser -> execute(array($userName, $email, $password, $profile));
        disconnect(); //Encerra a conexão com o banco de dados
    }

    /*Função para verificar se o usuário já está cadastrado*/
    function isRegistered($email){
        $sql = "SELECT * FROM tb_users WHERE email=?";
        $infoUser = connect() -> prepare($sql);
        $infoUser -> execute([$email]);
        $contUser = $infoUser -> rowCount();
        return $contUser > 0 ? true:false;
        disconnect();
    }

     /*Função para fazer o login do usuário*/
     function login($email,$password){
        $sql = "SELECT * FROM tb_users WHERE email=? AND password=? LIMIT 1";
        $infoUser = connect() -> prepare($sql);
        $infoUser -> execute([$email,$password]);
        $contUser = $infoUser -> rowCount();
        if($contUser==1){
            foreach($infoUser as $info){
                session_start();
                $_SESSION['id_user'] = $info['id_user'];
                $_SESSION['name'] = $info['name'];
                $_SESSION['email'] = $info['email'];
                $_SESSION['profile'] = $info['profile'];   
                $_SESSION['profile'] = $info['profile']; 
                $_SESSION['login'] = true;
            }
        }
        return $contUser > 0 ? true:false;

        disconnect();
    }

    /*Realizar o logout do usuário*/
    function logout(){
        session_destroy();
    }

?>