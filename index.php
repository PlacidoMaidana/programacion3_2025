<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
//if (isset($_POST["nombre"])) {
if (isset($_POST["nombre"])) {
    
    //echo "</br><h1> Hola ".$_POST["nombre"] ."</h1>" ;
    //echo "</br><h1> Hola ".$_POST["nombre"] ."</h1>" ;

    //var_dump($_POST); //permite mostrar el arreglo asociativo $_POST completo

    if ($_POST["genero"]==1) {
       echo "Buenas noches señor ".$_POST["nombre"]."<br >" ;
       echo "sus jobis son: <br>";
        if (isset($_POST["DIBUJO"]))
        {echo $_POST["DIBUJO"]."<br>";}
        if (isset($_POST["AJEDRES"]))
        {echo $_POST["AJEDRES"]."<br>";}
        if (isset($_POST["MUSICA"]))
        {echo $_POST["MUSICA"]."<br>";}


        echo "Vive en la provincia de : <br>";
        if (isset($_POST["provincia"]))
        {echo $_POST["provincia"]."<br>";}


        echo "Comentarios:";
        if (isset($_POST["comentario"]))
        {echo $_POST["comentario"]."<br>";}


    }


}else{
    if (isset($_GET["nombre"])) {
     echo "</br><h1> Hola tu nombre vino por GET ".$_GET["nombre"] ."</h1>" ;
    }
?>

<form action="index.php" method="POST">

Ingresa tu nombre: <input type="text" name="nombre" id="" required>
<br>
Ingresa tu CLAVE: <input type="password" name="clave" id="">
<br>
Ingresa tu genero: 
<INPUT TYPE="radio" NAME="genero" VALUE="1" checked> MASC
<INPUT TYPE="radio" NAME="genero" VALUE="2"> FEM

<br>
Ingresa tu JOBI: 
<INPUT TYPE="checkbox" NAME="DIBUJO" VALUE="DIBUJO"> DIBUJO<br>
<INPUT TYPE="checkbox" NAME="MUSICA" VALUE="MUSICA"> MUSICA<br>
<INPUT TYPE="checkbox" NAME="AJEDRES" VALUE="AJEDRES"> AJEDERES<br>

<INPUT TYPE="hidden" NAME="identificador" VALUE="8">.

<br>
Descripcion: <br>
<TEXTAREA NAME="comentario" COLS="20" ROWS="4">
Ponga aquí su comentario
</TEXTAREA>

<br>


<SELECT NAME="provincia">
<OPTION VALUE="Corrientes" CHECKED> Corrientes
<OPTION VALUE="Chaco"> Chaco
</SELECT>

<input type="submit" value="Enviar">

</form>

<?php };?>

<a href="index.php">INICIO</a>
<a href="index.php?nombre=Paloma+Meza">Otro saludo</a>



<?php 



$v=0;
$a=0;

$tabla=array();

/*
for ($i=0; $i < 20 ; $i++) { 
    echo $v++ ."</br>";
}
*/

/*

for ($i=0; $i < 20 ; $i++) { 
    $tabla[$i]= $i++*5;
}

foreach ($tabla as $key => $value) {
   echo $value. "</br>";
}
   
*/

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

    
</body>
</html>