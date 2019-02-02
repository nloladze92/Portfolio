package main

import (
	"fmt"
	"os"
)

type readerFile struct{}

func main() {
	fmt.Println(os.Args)
	os.Args[1]

	rf := readerFile{}
}

func (f *File) Read(b []byte) (n int, err error) {

}
