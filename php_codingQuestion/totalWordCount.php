<?php
//Write a PHP program to count the total number of words in a string.
function countWords($str) {
    return str_word_count($str);
}

echo "Total words: " . countWords("Write a PHP program to count the total number of words in a string.");
?>
