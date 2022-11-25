<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(168, 131, 236);"><br><br><br><br><br>
<div class="container" align="center">
    <h2>&#128064;  ผลลัพธ์ที่ได้เท่ากับ :<br>&#128071;<br><br>
<?php    
    switch ($op){
        case '+':
            function addNumber($num1,$num2){
                echo  $num1 + $num2;
                }
                echo addNumber($num1,$num2);
            break;
        case '-':
            function minusNumber($num1,$num2){
                echo  $num1 - $num2;
                }
                echo minusNumber($num1,$num2);
            break;
        case 'x':
            function multipleNumber($num1,$num2){
                echo  $num1 * $num2;
                }
                echo multipleNumber($num1,$num2);
            break;
        case '/':
            function divideNumber($num1,$num2){
                echo  $num1 / $num2;
                }
                echo divideNumber($num1,$num2);
            break;
        case 'xX':
            function powerNumber($num1,$num2){
                echo  $num1 ** $num2;
                }
                echo powerNumber($num1,$num2);
            break;
    
    
            default:
                function modNumber($num1,$num2){
                echo $num1 % $num2;
                }
                modNumber($num1,$num2);
    
        }

?></h2></div>
</body>
</html>