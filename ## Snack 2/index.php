<?php 

$name = $_GET('name');
$mail = $_GET('mail');
$age = $_GET('age');

/* if(strlen($name) > 3) {

    elseif ( strpos($mail, '@')) {

        elseif ( strpos($mail, '.')) {

            
        };

    };
    else {
        echo 'accesso negato;'
    }
}; */

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    

    <form method="get">
        <input type="text" name="name">
        <input type="text" name="mail">
        <input type="number" name="age">
        <button type="submit">submit</button>
    </form>


</body>
</html>