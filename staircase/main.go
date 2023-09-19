package main

import "fmt"

/**
 * This week's question:
 * You have n equal-sized blocks and you want to build a staircase with them.
 * Return the number of steps you can fully build.
 *
 * Example:
 *
 * buildStaircase(6)
 * 3
 *
 * // #
 * // ##
 * // ###
 *
 * buildStaircase(9)
 * 3 // it takes 10 blocks to make 4 steps
 */

func buildStaircase(blocks int) int {
	stairs := 0
	blocksUsed := 0

	for blocksUsed+stairs < blocks {
		stairs++
		blocksUsed += stairs
	}

	return stairs
}

func main() {
	fmt.Println(buildStaircase(0))
	fmt.Println(buildStaircase(1))
	fmt.Println(buildStaircase(2))
	fmt.Println(buildStaircase(3))
	fmt.Println(buildStaircase(4))
	fmt.Println(buildStaircase(5))
	fmt.Println(buildStaircase(6))
	fmt.Println(buildStaircase(7))
	fmt.Println(buildStaircase(8))
	fmt.Println(buildStaircase(9))
}
