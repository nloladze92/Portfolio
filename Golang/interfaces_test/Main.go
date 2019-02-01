package main

import "fmt"

type getArea interface {
	printArea() float64
}

type triangle struct {
	height float64
	base   float64
}

type square struct {
	sideLength float64
}

func main() {
	t := triangle{}
	s := square{}
}

func printArea()

func (s getArea) printArea() float64 {
	area := sideLength * 2
	fmt.Println(area)
	return area
}

func (t getArea) printArea() float64 {
	area := height * base * .5
	fmt.Println(area)
	return area
}
