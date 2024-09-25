<?php
    $str1 = readline("Enter first String: ");
    $str2 = readline("Enter second String: ");
    $str3 = readline("Enter third String: ");

    $str1 = strtoupper($str1);
    $str2 = strtoupper($str2);
    $str3 = strtoupper($str3);

    // User Input : Secure Password Generator, Output : $ECPA$Gen
    // SECURE to $EC, PASSWORD to PA$, GENERATOR to Gen
    $str1 = "$" . substr($str1, 1, 1) . substr($str1, 2, 1);
    $str2 = substr($str2, 0, 2) . "$";
    $str3 = ucfirst(substr($str3, 0, 3));

    echo $str1 . $str2 . $str3;
?>
