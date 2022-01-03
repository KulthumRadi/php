<?php
// prctice Q1 :Write a function to calculate the factorial of a number (non-negative integer)
function factorial($number) 
{
    if ( $number === 0 ){
    return 1 ;
}
else {
    return $number * factorial($number-1);
}
}
print_r(factorial(5));


// prctice Q2 :Write a function to reverse a string 



function reverse ($string) 
{
   
//     $arr = str_split($string);
// $arr2=array_reverse($arr);
// return $arr2;
return strrev($string);
}
echo (reverse ("kama,jk"));

// echo "jkkdbcjbdsj,cns
?> 


