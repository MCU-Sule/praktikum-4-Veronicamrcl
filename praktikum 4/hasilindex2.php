<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1">
        <form>
            <tr bgcolor="#bbdc58">
                <td colspan="2" align="center">Kalkulator</td>
            </tr>
            <tr>
                <td bgcolor="#6ab04c" align="left">Angka Pertama</td>
                <?php
                echo "<td align='center'> $_GET[angka1] </td>";
                ?>
            </tr>
            <tr>
                <td bgcolor="#6ab04c" align="left">Angka Kedua</td>
                <?php
                echo "<td align='center'> $_GET[angka2] </td>";
                ?>
            </tr>
            <tr>
                <td bgcolor="#6ab04c" align="left">Operator</td>
                <?php
                echo "<td align='center'> $_GET[opt] </td>";
                ?>
            </tr>
            <tr>
                <td colspan="2" align="center">Hasil=
                    <?php
                    $a1 = $_GET["angka1"];
                    $a2 = $_GET["angka2"];
                    $operator = $_GET["opt"];
                    
                    if($operator == "+")
                    { echo $a1+$a2; } 
                    else if ($operator == "-")
                    { echo $a1-$a2; } 
                    else if ($operator == "*")
                    { echo $a1*$a2; } 
                    else if ($operator == "/")
                    { echo $a1/$a2; } 
                    ?>
                </td>
            </tr>
        </form>
    </table>

</body>
</html>
