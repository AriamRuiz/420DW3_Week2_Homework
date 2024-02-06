<?php
declare(strict_types=1);

/*
 * 420DW3_Week2_Homework index.php
 * 
 * @author Marc-Eric Boury (MEbou)
 * @since 1/18/2023
 * (c) Copyright 2023 Marc-Eric Boury 
 */

/**
 * The absolute path of the project root directory
 */
const PROJECT_ABS_ROOT = __DIR__ . DIRECTORY_SEPARATOR;

// Set this to true to see debug information for the solutions
$test_solutions = false;

if ($test_solutions) {
    include "Solutions/Question1.php";
    include "Solutions/Question2.php";
    include "Solutions/Question3.php";
    
} else {
    include "Questions/Question1.php";
    include "Questions/Question2.php";
    include "Questions/Question3.php";
    
}
