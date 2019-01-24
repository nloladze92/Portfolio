package main

import "fmt"

type englishBot struct{}
type spanishBot struct{}

func main() {

}

func printGreeting(eb englishBot) {
	fmt.Println(eb.getGreeting())
}

func printGreeting(sb spanishBot) {
	fmt.Println(sb.getGreeting())
}

func (englishBot) getGreeting() string {
	// customn logic for generating english greeting
	return "Hi There!"
}

func (spanishBot) getGreeting() string {
	// custom logic
	return "Hola"
}
