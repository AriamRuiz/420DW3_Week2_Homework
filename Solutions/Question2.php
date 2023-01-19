<?php
declare(strict_types=1);

/*
 * 420DW3_Week2_Homework Question2.php
 * 
 * @author Marc-Eric Boury (Newironsides)
 * @since 2023-01-18
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
$var_5 = 10;
$obj1 = new TestObject();
$obj2 = new TestObject();
$var_8 = 0;
$var_10 = 0;
// </editor-fold>


/*
 * Question 2: Operations
 * a) Add the integers 5 and 10, and assign the result to a variable named "var_1".
 * b) Multiply by 2 the value of the variable "var_1" created in a) and assign the result to a variable named "var_2".
 * c) Calculate the remainder of the division (modulo) of the variable "var_2" created in b) by 7 and assign
 *      the result to a variable named "var_3".
 * d) Concatenate the strings "That's " and "no moon!" and assign the result to a variable named "var_4".
 * e) Add 5 to the variable $var_5 (exists already). Use a compound operator.
 * f) Check if the variable "var_5" used in e) is less or equal than the variable "var_1" defined in a) and assign the
 *      result of the comparison to a variable named "var_6". Use a comparison expression, NOT an if-block.
 * g) Check if the variables $obj1 and $obj2 are IDENTICAL and store the result in a variable named "var_7".
 * h) Check if the pre-increment of the variable $var_8 (exists already) is EQUAL to itself and assign the result to
 *      a variable named "var_9". The check, pre-increment and assignment operations must be done in a single line.
 * i) Check if the post-increment of the variable $var_10 (exists already) is EQUAL to itself and assign the result to
 *      a variable named "var_11". The check, pre-increment and assignment operations must be done in a single line.
 * j) Use the instanceof operator to check if the variable $obj1 (exists already) is of type "TestObject" and assign
 *      the result to a variable named "var_12".
 */
// WRITE YOUR CODE HERE

$var_1 = 5 + 10;
$var_2 = 2 * $var_1;
$var_3 = $var_2 % 7;
$var_4 = "That's " . "no moon!";
$var_5 += 5;
$var_6 = ($var_5 <= $var_1);
$var_7 = ($obj1 === $obj2);
$var_9 = (++$var_8 == $var_8);
$var_11 = ($var_10++ == $var_10);
$var_12 = ($obj1 instanceof TestObject);

// END OF YOUR CODE
correct_question2();