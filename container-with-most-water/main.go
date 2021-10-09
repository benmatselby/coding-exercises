package main

import (
	"fmt"
)

// Given n non-negative integers `a1, a2, ..., an`, where each represents a point at
// coordinate (i, ai). n vertical lines are drawn such that the two endpoints of
// the line i is at (i, ai) and (i, 0). Find two lines, which, together with the
// x-axis forms a container, such that the container contains the most water.

// main will execute the program
func main() {
	// 49
	fmt.Println(maxArea([]int{1, 8, 6, 2, 5, 4, 8, 3, 7}))

	// 49
	fmt.Println(maxArea([]int{1, 7, 6, 2, 5, 4, 8, 3, 8}))

	// 1
	fmt.Println(maxArea([]int{1, 1}))

	// 16
	fmt.Println(maxArea([]int{4, 3, 2, 1, 4}))
}

// maxArea will figure out the maximum area given the co-ordinates.
func maxArea(height []int) int {
	l := 0
	r := len(height) - 1
	area := 0
	for l < r {
		area = max((r-l)*min(height[l], height[r]), area)
		if height[l] < height[r] {
			l++
		} else {
			r--
		}
	}

	return area
}

// max will give us the maximum integer.
func max(a, b int) int {
	if a < b {
		return b
	}

	return a
}

// min will give us the maximum integer.
func min(a, b int) int {
	if a < b {
		return a
	}

	return b
}
