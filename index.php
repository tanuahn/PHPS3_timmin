<?php
$arr = [1, 3, 6, 4, 9, 10, -81, -100];
function findMin($array)
{
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
    }
    return $min;
}
echo findMin($arr) . " is min value";
?>