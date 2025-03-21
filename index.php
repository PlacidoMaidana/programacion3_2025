<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$v=0;
$a=0;

$tabla=array();

/*
for ($i=0; $i < 20 ; $i++) { 
    echo $v++ ."</br>";
}
*/


for ($i=0; $i < 20 ; $i++) { 
    $tabla[$i]= $i++*5;
}

foreach ($tabla as $key => $value) {
   echo $value. "</br>";
}

/*

while ($a <= 20) {
    echo $v++ ."</br>";
    $a++;
}

do {
    # code...
} while ($a <= 10);


if (condition) {
    # code...
}else {
    # code...
}

case 'value':
    # code...
    break;

*/




?>



<h1>Hola mundo</h1>

    
</body>
</html>