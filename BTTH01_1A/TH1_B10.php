<?php

$arrs = ['a', 0, 'null', 'false'];
$upper=[];
foreach($arrs as $value){
    $upper[] = strtoupper($value);
}
print_r($upper);
?>