<?php

/* strpos(string,find,start)*/

$text = "Hello, World!";
if(strpos($text," "))
{
print("There is  space in '$text'<BR>\n");
}
print("World is at position ".strpos($text, "World") . "<BR>\n");
?>