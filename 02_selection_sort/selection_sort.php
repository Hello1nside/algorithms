<?php

function findSmallestIndex(array $array): int {
    $smallestElement = $array[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $smallestElement) {
            $smallestElement = $array[$i];
            $smallestIndex = $i;
        }
    }
    return $smallestIndex;
}

function selectionSort(array $array): array {
    $sortedArray = [];
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        $smallestIndex = findSmallestIndex($array);
        array_push($sortedArray, array_splice($array, $smallestIndex, 1)[0]);
    }

    return $sortedArray;
}

var_dump(selectionSort([5, 3, 6, 2, 9]));
