<?php
//same as strstr but this is case-insensitive


$text = "Although he had help, Leon is the author this book.";
print("Full text: $text <BR>\n");
print("Looking for 'leon':" . stristr($text,"leon"));
?>