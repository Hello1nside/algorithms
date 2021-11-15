package main

import "fmt"

func findSmallestIndex(arr []int) int {
    smallestElement := arr[0]
    smallestIndex := 0

    for i := 0; i < len(arr); i++ {
        if arr[i] < smallestElement {
            smallestElement = arr[i]
            smallestIndex = i
        }
    }
    return smallestIndex
}

func selectionSort(arr []int) []int {
    length := len(arr)
    sortedArray := make([]int, length)

    for i := 0; i < length; i++ {
        smallestIndex := findSmallestIndex(arr)
        sortedArray[i] = arr[smallestIndex]
        arr = append(arr[:smallestIndex], arr[smallestIndex+1:]...)
    }
    return sortedArray
}

func main() {
    array := []int{5, 3, 6, 2, 9}
    fmt.Println(selectionSort(array))
}
