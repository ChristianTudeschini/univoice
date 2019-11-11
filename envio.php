<?php

    //Setando valores de conexão
    /*$host = "localhost";
    $db = "id9840586_testebanco";
    $user = "id9840586_chris";
    $pass = "39074802";
    */
    $host = "localhost";
    $db = "u151055521_voice";
    $user = "u151055521_voice";
    $pass = "123456";

    $con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR); 

    $nome = $_POST{'nome'};
    $mat = $_POST{'mat'};
    $sala = $_POST{'sala'};
    $nome2 = $_POST{'nome2'};
    $mat2 = $_POST{'mat2'};
    $sala2 = $_POST{'sala2'};


    $query = sprintf("INSERT INTO univoice (nome, matricula, sala, nomed, matriculad, salad) VALUES ('{$nome}', '{$mat}', '{$sala}','{$nome2}', '{$mat2}', '{$sala2}')");  
    $result = mysqli_query($con, $query);

    ?>
