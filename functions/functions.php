<?php
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
        $_SESSION['isPassword'] = createPassword($arrChars, $pswLength);
        return $_SESSION['isPassword'];
    }
    else {
        $_SESSION['isPassword'] = "";
       return $_SESSION['isPassword'];
    }
}

function passToSession($arrChars) {
    if (isset($_GET["passlngt"])){
        $_SESSION["passLngt"] = $_GET["passlngt"];
    printPassword($_SESSION["passLngt"], $arrChars);
    }
}