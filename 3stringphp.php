<?php
$str="this is a string";
echo $str;
$len=strlen($str);
echo"the length of this string is".$len."thankyou<br>";//string concatination operator
echo"the number of words in this string is". str_word_count($str);//count of words
echo"the reverse string is". strrev($str);//reversed the string
echo"<br>the search for string is".strpos($str,"is");//position of word in string
echo"<br>replace the string is".str_replace("is","at",$str);
//echo $len;
?>