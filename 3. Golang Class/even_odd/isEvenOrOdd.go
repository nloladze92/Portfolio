package main

import "fmt"

func main() {

	isEvenOrOdd := []int{}
	for i := 0; i <= 10; i++ {
		isEvenOrOdd = append(isEvenOrOdd, i)
		if i%2 == 0 {
			fmt.Println(i, "is even")
		} else {
			fmt.Println(i, "is odd")
		}
	}
	fmt.Println(isEvenOrOdd)
}
