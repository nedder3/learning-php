<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        //suma
        $suma=$valorA+$valorB;
        //resta
        $resta=$valorA-$valorB;
        //multiplicacion
        $multiplicacion=$valorA*$valorB;
        //division
        $division=$valorA/$valorB;

        echo "</br>".$suma;
        echo  "</br>".$resta;
        echo  "</br>".$multiplicacion;
        echo  "</br>".$division;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>

     <form action="ejercicio7.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">

     </form>

</body>
</html>