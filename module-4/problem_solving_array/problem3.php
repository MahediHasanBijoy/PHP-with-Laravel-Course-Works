<?php
// 3. Problem :Find the most common word in a sentence:
$sentence = "There is a man live in this town. His name is Brown. He was very poor. He can't feed himself nor his family. So his family left him";

$input = strtolower($sentence);
// string to array of words
$words = explode(" ", $input);

// count number of occurence each word in the sentence
$count_values = array_count_values($words);

// sort the array in descending
arsort($count_values);

// print the common word
echo array_keys($count_values)[0];