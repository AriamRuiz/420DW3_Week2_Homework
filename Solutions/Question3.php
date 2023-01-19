<?php
declare(strict_types=1);

/*
 * 420DW3_Week2_Homework Question3.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-19
 * (c) Copyright 2023 Marc-Eric Boury 
 */

/*
 * Write all your code between the comments indicating where to do so.
 * Do not mind any code outside of those comments, it is used for correction.
 * Make certain that all the names of your variables are exactly as requested in the question, including the case
 * The required variable names do not include the required dollar sign, remember to add it!
 *
 *
 * EXAMPLE - THIS IS AN EXAMPLE QUESTION, DO NOT ANSWER IT, IT'S DONE ALREADY
 * Example question:
 * a) include the file located at /Correction/correction_functions.php
 *      The file is required; also remember that files containing functions and classes cannot be included more than once.
 *      Use the appropriate inclusion statement.
 */
// WRITE YOUR CODE HERE

require_once PROJECT_ABS_ROOT."Correction/correction_functions.php";

// END OF YOUR CODE


// <editor-fold defaultstate="collapsed" desc="preset values">
$given_array = [3, 56, "hello", "potato"];
$given_value = -4;
$if_result = null;
// </editor-fold>


/*
 * Question 3: control statements
 * a) Create an empty array variable named "my_array". Then, create a foreach loop that iterates over the elements
 *      of the array $given_array (exists already). Inside the loop, add the element to "my_array" by using
 *      the array access operator without a specified key.
 * b) Create an if... elseif... else... statement that checks whether the value of the variable $given_value
 *      (exists already) is less than, equal or greater than zero. In each case, assign the result to the variable
 *      $if_result (exists already).
 */
// WRITE YOUR CODE HERE

$my_array = [];
foreach($given_array as $element) {
    $my_array[] = $element;
}

if ($given_value < 0) {
    $if_result = -1;
} elseif ($given_value == 0) {
    $if_result = 0;
} else {
    $if_result = 1;
}



// END OF YOUR CODE
correct_question3();