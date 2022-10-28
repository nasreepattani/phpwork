<?php

    echo pi();
    echo pi()*2*2;

    $score = array(10,20,30,45,65,15,33,11,88,99,52);
    echo min($score); //10(หาค่าน้อยสุด)
    echo max($score);//99(หาค่ามากสุด)
    $ss = -22;
    echo abs($ss);//22(ตัดลบออก)
    echo sqrt(144);
    echo round(1.45);//ปัดเศษ
    echo rand(1,16);//สุ่มเลข

?>