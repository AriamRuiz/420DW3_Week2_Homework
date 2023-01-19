<?php
declare(strict_types=1);

/*
 * 420DW3_Week2_Homework correction_functions.php
 * 
 * @author Marc-Eric Boury (MEbou)
 * @since 1/18/2023
 * (c) Copyright 2023 Marc-Eric Boury 
 */

require_once "debug_functions.php";

/**
 * @return void
 *
 * @author Marc-Eric Boury
 * @since  2023-01-19
 */
function correct_question1() : void {
    echo "<h2>Question1:</h2>";
    global $integer_variable;
    global $string_variable;
    global $boolean_variable;
    
    if (!isset($integer_variable)) {
        echo "a) The variable is not defined, verify its name.<br/>";
    } elseif ($integer_variable !== 5) {
        echo "a) The value of the variable is incorrect; current value:<br/>";
        debug($integer_variable);
    } else {
        echo "a) Correct, well done!<br/>";
    }
    
    
    if (!isset($string_variable)) {
        echo "b) The variable is not defined, verify its name.<br/>";
    } elseif ($string_variable !== "Oh my, a string!") {
        echo "b) The value of the variable is incorrect; current value:<br/>";
        debug($string_variable);
    } else {
        echo "b) Correct, well done!<br/>";
    }
    
    
    if (!isset($boolean_variable)) {
        echo "c) The variable is not defined, verify its name.<br/>";
    } elseif ($boolean_variable !== TRUE) {
        echo "c) The value of the variable is incorrect; current value:<br/>";
        debug($boolean_variable);
    } else {
        echo "c) Correct, well done!<br/>";
    }
    
    
    if (!defined("MY_CONSTANT")) {
        echo "d) The constant is not defined, verify its name.<br/>";
    } elseif (MY_CONSTANT !== 1) {
        echo "d) The value of the variable is incorrect; current value:<br/>";
        debug(MY_CONSTANT);
    } else {
        echo "d) Correct, well done!<br/>";
    }
    
    
    if (!defined("MY_OTHER_CONSTANT")) {
        echo "e) The constant is not defined, verify its name.<br/>";
    } elseif (MY_OTHER_CONSTANT !== $boolean_variable) {
        echo "e) The value of the variable is incorrect; current value:<br/>";
        debug(MY_OTHER_CONSTANT);
    } else {
        echo "e) Correct, well done!<br/>";
    }
}

/**
 * @return void
 *
 * @author Marc-Eric Boury
 * @since  2023-01-19
 */
function correct_question2() : void {
    
    echo "<h2>Question2:</h2>";
    global $obj1;
    global $obj2;
    global $var_5;
    global $var_8;
    global $var_10;
    
    global $var_1;
    global $var_2;
    global $var_3;
    global $var_4;
    global $var_6;
    global $var_7;
    global $var_9;
    global $var_11;
    global $var_12;
    $answers = [
        15,
        30,
        (30%7),
        "That's " . "no moon!",
        15,
        true,
        ($obj1===$obj2),
        (++$var_8 == $var_8),
        ($var_10++ == $var_10),
        ($obj1 instanceof TestObject)
    ];
    $results = [
        $var_1,
        $var_2,
        $var_3,
        $var_4,
        $var_5,
        $var_6,
        $var_7,
        $var_9,
        $var_11,
        $var_12
    ];
    $string = "abcdefghij";
    for ($iterator = 0; $iterator < strlen($string); $iterator++) {
        $prefix = substr($string, $iterator, 1) . ") ";
        $current_answer = $results[$iterator];
        $correct_answer = $answers[$iterator];
        if (!isset($current_answer)) {
            echo $prefix."The variable is not defined, verify its name.<br/>";
        } elseif ($current_answer != $correct_answer) {
            echo $prefix."The value of the variable is incorrect; current value:<br/>";
            debug($current_answer);
        } else {
            echo $prefix."Correct, well done! The resulting value is:<br/>";
            debug($correct_answer);
        }
    }
    
}

/**
 * @return void
 *
 * @author Marc-Eric Boury
 * @since  2023-01-19
 */
function correct_question3() : void {
    global $given_array;
    global $my_array;
    global $given_value;
    global $if_result;
    
    echo "<h2>Question3:</h2>";
    if (!isset($my_array)) {
        echo "a) The variable is not defined, verify its name.<br/>";
    } elseif ($my_array != $given_array) {
        echo "a) The value of the variable is incorrect; current value:<br/>";
        debug($my_array);
    } else {
        echo "a) Correct, well done!<br/>";
    }
    
    
    if (!isset($if_result)) {
        echo "b) The variable is not defined, verify its name.<br/>";
    } elseif ($if_result != ($given_value <=> 0)) {
        echo "b) The value of the variable is incorrect; current value:<br/>";
        debug($if_result);
    } else {
        echo "b) Correct, well done!<br/>";
    }
}