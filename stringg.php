<?php
//uppercase and lowecase
echo strtoupper("Hello it's me Aashma Bhandary!")."<br>";
echo strtolower("HELLO EVERYONE IT'S ME Aashma Bhandary.");
echo"<br>";
//find a word in a string and replace it
echo str_replace("everyone", "Aashma","hi everyone!" );
echo "<br>";

//find a position o a word in a string
echo strpos("hi everyone", "everyone")."<br/>";
echo "<br>";

//find last letters of the string
echo substr("Hello nepal",-4)."<br>";
echo "<br>";
//to display first 100 characters of a paragraph

$string1="Hi,its me Aashma Bhandary.I am from Butwal Milanchowk.Currently studying BCA in Crimson College of Technology.My hobbies are travelling and dancing.";
echo substr($string1,0,100);
echo"<br>";
//Extract “a best instruction ” from of below string.Alpha BetaCollege has a best instruction for BscCSIT.
 $x="alpha beta college has a best instruction for bsc csit.";
$newarray=explode(" ",$x);
echo $newarray[4]." ".$newarray[5]." ".$newarray[6];
?>