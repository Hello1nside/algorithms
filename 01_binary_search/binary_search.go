package main

import "fmt"

func binarySearch(list []int, item int) int {
    low := 0
    high := len(list) - 1

    for low <= high {
        mid := (low + high) / 2

        if list[mid] == item {
            return mid
        }

        if list[mid] < item {
            low = mid + 1
        } else {
            high = mid - 1
        }
    }
    return -1
}

func main() {
    fmt.Println(binarySearch([]int{1, 3, 5, 7, 9}, 5)) // 2
    fmt.Println(binarySearch([]int{1, 3, 5, 7, 9}, -1)) // -1
}
