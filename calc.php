<?php

    $diagonal1 = $_POST['diagonal1'];
    $diagonal2 = $_POST['diagonal2'];
    $arean = 1/2 * $diagonal1 * $diagonal2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่สี่เหลี่ยมรูปว่าว</title>
</head>
<body>
    <br>
    <p style='color:red'>
    <?php
        echo "เส้นทแยงมุม เท่ากับ ".$diagonal1."<br>";
        ?>
        </p>
        <p style='color:blue'>
    <?php
        echo "เส้นทแยงมุม เท่ากับ ".$diagonal2."<br>";
        ?>
        </p>
        <?php
        echo "พื้นที่สี่เหลี่ยมรูปว่าว เท่ากับ ".$arean;
    ?>
</body>
</html>