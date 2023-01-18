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