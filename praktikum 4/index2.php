<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "author" content = "Veronica Marcella Angela Simalngo 2172042">
    <title>Document</title>
</head>
<body>
    <form action="hasilindex2.php" name ="form input" method="GET">
        <table align="center" border="1">
            <tr bgcolor="#e94e4b" align="center">
                <td colspan="2">Kalkulator</td>
            </tr>
            <tr>
                <td bgcolor="#ff7979" align="left"> Angka Pertama</td>
                <td><input type ="number" name="angka1" id="angka1"></td>
            </tr>
            <tr>
                <td bgcolor="#ff7979" align="left">Angka Kedua</td>
                <td><input type ="number" name="angka2" id="angka2"></td>
            </tr>
            <tr>
                <td bgcolor="#ff7979" align="left">Operator</td>
                <td><input type ="text" name="opt" id="opt"></td>
            </tr>
            <tr bgcolor="#e94e4b"align="center">
                <td colspan="2">
                <input type ="submit" value="submit">
                    <input type ="reset" value="cancel">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>