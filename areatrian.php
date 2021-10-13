<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo del area de un triangulo</title>
</head>
<body>
    <h1 align="center">area de un triangulo</h1>

    <br><br><br>
    <h2 align="center">datos a usar</h2>
    <table align="center" border="1">
        <tr>
            <td>Cateto A:</td>
            <td>3 Cm</td>
        </tr>
        <tr>
            <td>Cateto A:</td>
            <td>4 Cm</td>
        </tr>
    </table>
    <br><br>
    <?php
    $cateto_a = 3;
    $cateto_b = 4;
    $hipotenusa = sqrt(pow($cateto_a,2) + pow($cateto_b,2));
    ?>
    <h2 align="center">resultado</h2>
    <table align="center" border="1">
    <tr>
            <td>Valor de la hipotenusa</td>
            <td>
                <?php
                echo $hipotenusa . 'Cm';
                ?>
            </td>
        </tr>
    </table>
</body>
</html>