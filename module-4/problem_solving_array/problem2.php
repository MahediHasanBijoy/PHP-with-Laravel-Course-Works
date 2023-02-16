<?php
// 2.Problem:Remove all words that start with a vowel from a sentence:

$sentence = "The quick brown fox jumps over the lazy dog";

$words = explode(" ", $sentence);

$filter_words = array_filter($words, function($word){
    return !in_array($word[0], ['a', 'e', 'i', 'o', 'u']);
});

echo join(" ", $filter_words);