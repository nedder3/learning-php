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

        if($valorA==$valorB){
            echo"<br/> el valor de A es igual al valor de B <br/>";
            if($valorA==4){
                echo "el valor es 4<br/>";
            }
            if($valorA==5){
                echo "el valor es 5 ";
            }
            
            
        }

        if(($valorA==$valorB) &&($valorA==4)){
            echo "El valor de A es igual a B y es el numero 4";
        }

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

     <form action="ejercicio10.php" method="post">
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