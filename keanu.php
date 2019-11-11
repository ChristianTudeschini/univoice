<?php
    $host = "localhost";
    $db = "u151055521_voice";
    $user = "u151055521_voice";
    $pass = "123456";

    $con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR); 

    $query = sprintf("SELECT * FROM univoice");  
    //$query = sprintf("DELETE FROM univoice");

    $result = mysqli_query($con, $query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acompanhamento</title>
    </head>
    <body>

        
    </body>
    </html>
    
    <?
    if ($result->num_rows > 0) {    
        while($row = $result->fetch_assoc()) {
            //$a = implode("", $row["nome"]);

            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <table class="table">
            <thead>
                <tr>                
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Sala</th>
                <th scope="col">Nome Dupla</th>
                <th scope="col">Matricula Dupla</th>
                <th scope="col">Sala Dupla</th>

                </tr>
            </thead>
            <tbody>                     

            <?

            $a = $row['nome'];
            $b = $row['matricula'];
            $c = $row['sala'];
            $d = $row['nomed'];
            $e = $row['matriculad'];
            $f = $row['salad'];
            echo "<tr>
                
            <td width='200'>$a</td>
            <td width='200'>$b</td>
            <td width='200'>$c</td>
            <td width='200'>$d</td>
            <td width='200'>$e</td>
            <td width='200'>$f</td>
            </tr>
            ";
            
        }
        ?>
            </tbody>
            </table>
        <?
    } else {
        
    }
  
    
    

?>