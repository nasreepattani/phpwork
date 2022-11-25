<?php

    function displayName(){
        echo "Nasree Langi";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color='red'>";

    function addNumber($num1,$num2){
        echo $num1 + $num2;
    }
    addNumber(2,4);

    echo "<hr color='red'>";

    function displayStudent($name){
        echo $name;
    }
    displayStudent("Nasree");

    echo "<hr color='green'>";

    function powerNumber($num,$pow){
        echo $num ** $pow;                  //ยกกำลัง
    }
    powerNumber(10,5);

    echo "<hr color='red'>";

    function number($numerate,$denomerate){
        echo $numerate % $denomerate;       //เศษส่วน
    }
    number(17,5);
?>