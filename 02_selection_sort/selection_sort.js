'use strict';

function findSmallestIndex(array) {
    let smallestElement = array[0];
    let smallestIndex = 0;

    for (let i = 1; i < array.length; i++) {
        if (array[i] < smallestElement) {
            smallestElement = array[i];
            smallestIndex = i;
        }
    }

    return smallestIndex;
}

function selectionSort(array) {
    let sortedArray = [];
    let length = array.length;

    for (let i = 0; i < length; i++) {
        let smallestIndex = findSmallestIndex(array);
        sortedArray.push(array.splice(smallestIndex, 1)[0]);
    }

    return sortedArray;
}

console.log(selectionSort([5, 3, 6, 2, 9])); // [2, 3, 5, 6, 9]
