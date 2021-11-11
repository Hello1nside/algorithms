<?php

function binary_search($list, $item) {
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($list[$mid] === $item) {
            return $mid;
        }

        if ($list[$mid] > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return null;
}

$my_list = [1, 3, 5, 7, 9];
echo binary_search($my_list, 3); // 1
echo binary_search($my_list, -1); // null
