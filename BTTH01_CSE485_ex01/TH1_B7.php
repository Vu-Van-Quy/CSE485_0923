<?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    //Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng sau:

    $a=[];
    for($i = 0; $i < count($array); $i++){
        if($array[$i]>=100 && $array[$i]<=200 && $array[$i]%5==0){
            array_push($a,$array[$i]);
        }
    }
    echo "Các số cần tìm là: " .implode(",", $a);

    // foreach($a as $value){
    //     echo "các sô cần hiển thị:" .$value;
    // }
    
?>
