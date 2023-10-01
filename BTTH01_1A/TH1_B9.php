<?php

$arrs = ['1', 'B', 'C', 'E'];
$upper=[];
foreach($arrs as $value){
    $upper[] = strtolower($value);
}
print_r($upper);
?>