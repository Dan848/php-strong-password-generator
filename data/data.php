<?php

$minChars = range('a', 'z');
$maxChars = range('A', 'Z');
$numChars = range('0', '9');
$specialChars = array('!', '#', '$', '%', '&', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', ']', '^', '_', '{', '}' );
$allChars = array($minChars, $maxChars, $numChars, $specialChars);