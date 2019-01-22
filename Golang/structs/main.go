package main

import "fmt"

type contactInfo struct {
	email   string
	zipCode int
}

type person struct {
	firstName string
	lastName  string
	contactInfo
}

func main() {
	// alex := person{"Alex", "Anderson"}
	// fmt.Println(alex)
	// var alex person
	// fmt.Println(alex)
	// fmt.Printf("%+v", alex)
	jim := person{
		firstName: "Jim",
		lastName:  "Hans",
		contactInfo: contactInfo{
			email:   "Jim@gmail.com",
			zipCode: 94000,
		},
	}
	jimPointer := &jim
	jimPointer.updateName("jimmy")
	jim.print()
}

func (pointerToPerson *person) updateName(newFirstName string) {
	(*pointerToPerson).firstName = newFirstName
}

func (p person) print() {
	fmt.Printf("+%v", p)
}
