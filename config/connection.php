<?php

    $connection = "";

    function connect(){
        /*Arquivo para conexão com o banco de dados*/
        try{
            $GLOBALS["connection"] = new PDO("mysql:host=localhost;dbname=bd_ferramanta_ov", "root","");
            return $GLOBALS["connection"];
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function disconnect(){
        $GLOBALS["connection"] = null;
    }
    
?>