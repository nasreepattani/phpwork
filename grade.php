<?php
    
    $score = $_GET['score'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><br><br><br><br><br>
<div class="container" align="center">
<table border="0" cellspacing="0" cellpadding="0" style="border: 8px double #99FF00" width=450> <tbody> <tr><td align="center" valign="middle" style="border: 5px dashed #99FF00"><?php    

if($score >= 90){
    echo "คุณได้เกรด A+";
}elseif($score >= 80){
    echo "คุณได้เกรด A";
}elseif($score >= 75){
    echo "คุณได้เกรด B+";
}elseif($score >= 70){
    echo "คุณได้เกรด B";
}elseif($score >= 65){
    echo "คุณได้เกรด C+";
}elseif($score >= 60){
    echo "คุณได้เกรด C";
}elseif($score >= 55){
    echo "คุณได้เกรด D+";
}elseif($score >= 50){
    echo "คุณได้เกรด D";
}else{
    echo "คุณได้เกรด F";
}    

?></td></tr></tbody></table>


</div>
</body>
</html>