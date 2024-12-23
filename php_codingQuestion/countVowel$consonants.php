<?php

//Write a PHP program to count the number of vowels and consonants in a given string.
function countVowelsConsonants($str) {
    $vowels = 0;
    $consonants = 0;
    $str = strtolower($str);
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_alpha($str[$i])) {
            if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowels++;
            } else {
                $consonants++;
            }
        }
    }
    
    return ['vowels' => $vowels, 'consonants' => $consonants];
}

$result = countVowelsConsonants("Hello World");
echo "Vowels: " . $result['vowels'] . ", Consonants: " . $result['consonants'];
?>
