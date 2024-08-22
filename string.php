<?php

$strings = ["Hello", "World", "PHP", "Programming"];

$vowel = ['a', 'e', 'i', 'o', 'u'];





foreach ($strings as $string){
    $vowel_count = 0;
    for($i=0; $i < strlen($string); $i++){
        if(in_array(strtolower($string)[$i], $vowel)){
            $vowel_count++;
        }
    }

    echo " Original String: $string, Vowel Count: $vowel_count, Reversed String: ". strrev($string) ."<br>";
}