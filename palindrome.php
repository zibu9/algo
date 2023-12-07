<?php

function isPalindrome($number) {
    // Convert the number to a string
    $strNumber = strval($number);
    
    // Reverse the string
    $reversedStr = strrev($strNumber);
    
    // Check if the original and reversed strings are the same
    return $strNumber === $reversedStr;
}

function findNumericalPalindromes($n, $num) {
    $palindromes = array();
    
    // Increment $num to the next non-single-digit number
    while ($num < 10) {
        $num++;
    }
    
    // Start from $num and keep looking for palindromes until we find $n of them
    while (count($palindromes) < $n) {
        // Check if the current number is a palindrome
        if (isPalindrome($num)) {
            // If it is, add it to the array
            $palindromes[] = $num;
        }
        
        // Move to the next number
        $num++;
    }
    
    return $palindromes;
}

// Examples
print_r(findNumericalPalindromes(4, 6)); // [11, 22, 33, 44]
print_r(findNumericalPalindromes(1, 75)); // [77]
print_r(findNumericalPalindromes(3, 19)); // [22, 33, 44]
?>
