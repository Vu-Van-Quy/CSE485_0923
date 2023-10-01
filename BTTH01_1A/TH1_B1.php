<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    // $sum = 0;
    // for ($i = 0; $i < count($arrs); $i++) {
    //   $sum += $arrs[$i];
    // }
    // echo "Tổng các phần tử là = " . implode(" + ", $arrs). " = ". $sum.'<br>';

    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    $sum = array_sum($arrs);
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum.'<br>';

    $product = array_product($arrs);
    echo "Tích các phần tử là = " . implode(" * ", $arrs). " = ". $product.'<br>';

    $diff = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $diff -= $arrs[$i];
      }
    echo "Hiệu các phần tử là = " . implode(" - ", $arrs). " = ". $diff.'<br>';


    $quotient = array_reduce($arrs, function ($carry, $item) {  //hàm reduce viết ra chuỗi, scarry phần tử trung gian, item phàn tử tiếp theo
        return $carry / $item;   
    });
    echo "Thương của các phần tử = " . implode(" / ", $arrs) . " = " . $quotient;
    
?>