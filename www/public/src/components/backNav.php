<?php
$navLogic = [
    'index' => 'index.php',
    'question-form1' => 'index.php',
    'question-form2' => 'question-form1.php',
    'question-form3' => 'question-form2.php',
    'results' => 'question-form3.php'
];
            
            
$currPage = $_SERVER["SCRIPT_NAME"];
foreach ($navLogic as $key => $value) {
    if (strpos($currPage, $key) !== false) {
        header("Location: $value");
        exit();
                    }
                }
            
            
        ?>
