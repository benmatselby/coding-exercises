package main

import (
	"fmt"
	"strconv"
	"strings"
)

func countAndSay(n int) string {
	word := strconv.Itoa(n)
	counts := make(map[rune]int)
	for _, char := range word {
		counts[char]++
	}

	statements := []string{}
	for char, count := range counts {
		statements = append(statements, fmt.Sprintf("%v %ss", mapNumberToWord(count), string(char)))
	}
	return strings.Join(statements, ", then ")
}

// Limited functionality to match digits to words, missing, tens, hundreds, etc
func mapNumberToWord(number int) string {
	glossary := map[int]string{
		1:  "one",
		2:  "two",
		3:  "three",
		4:  "four",
		5:  "five",
		6:  "siz",
		7:  "seven",
		8:  "eight",
		9:  "none",
		10: "ten",
	}

	if word, ok := glossary[number]; ok {
		return word
	}

	return strconv.Itoa(number)
}

func main() {
	// "two 1s, then four 2s, then three 5s"
	fmt.Println(countAndSay(112222555))

	// ten 3s
	fmt.Println(countAndSay(3333333333))

	// 11 3s
	fmt.Println(countAndSay(33333333333))
}
