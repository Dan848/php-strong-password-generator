<?php
include __DIR__ .  "./data.php";
function createPassword($arrChars, $strLength) {
    $newPassword = "";
    //Add at least one char for each type
    foreach ($arrChars as $char) {
        $newPassword .= $char[array_rand($char)];
    }
    //Merge the 4 array's into one
    $fullChars = call_user_func_array('array_merge', $arrChars);
    //Add char till strLength
    while (strlen($newPassword) < $strLength) {
        $newChar = $fullChars[array_rand($fullChars)];
        if (!str_contains($newPassword, $newChar)) {
        $newPassword .= $newChar;
        }
    }

    $passShuffle = str_shuffle($newPassword);
    return $passShuffle;
}

function printPassword($pswLength, $arrChars) {
    if (!empty($pswLength)) {
      return createPassword($arrChars, $pswLength);
    }
    else {
       return "";
    }
}