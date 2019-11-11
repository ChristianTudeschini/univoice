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
    
    //Coletando informações do outro formulário
    $query = sprintf("ALTER TABLE univoice ADD nomed VARCHAR(70), matriculad VARCHAR(8), salad VARCHAR(5) AFTER sala");  
    $result = mysqli_query($con, $query);

    if ($result){
        header('Location: index.html');
    }

    ?>
