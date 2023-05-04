<?php

$matches = [
    [
        'squadra di casa'=> 'milano',
        'squadra ospite'=> 'venezia',
        'punti squadra casa' => '98',
        'punti squadra ospite' => '98',
    ],
    [
        'squadra di casa'=> 'treviso',
        'squadra ospite'=> 'venezia',
        'punti squadra casa' => '98',
        'punti squadra ospite' => '98',
    ],
    [
        'squadra di casa'=> 'milano',
        'squadra ospite'=> 'cantù',
        'punti squadra casa' => '45',
        'punti squadra ospite' => '98',
    ],
    [
        'squadra di casa'=> 'milano',
        'squadra ospite'=> 'padova',
        'punti squadra casa' => '34',
        'punti squadra ospite' => '88',
    ],
    
];
var_dump('ciao');

foreach ($matches as $event) {
    foreach ($event as $key => $value) {
        echo " $value -" ;
        
    };
    
};
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

    <div class="container w-50">
        <div class="card">

        

        </div>
    </div>

    
</body>
</html>



<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->