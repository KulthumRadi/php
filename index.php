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


<!-- // prctice Q3 :Write a PHP script to that inserts a new item in an array in any position -->
$ array =  ("job" , "programmer")
array_push($job , "codder") 
print_r($job)


<!-- 4 --  Write a PHP script to sort an array using case-insensitive natural ordering -->
$ numbers = array ("kulthum3","Kulthum3","DeMa4","dema5")
natcasesort($numbers)
print_r($numbers)
<!-- 5 -- Write a PHP script to check the largest number among three integers -->
function getLargest ($n1 , $n2  , $n3 )
{
    $max = $n1;
     if($n2>$n1){
         $max = $n2;
     }
     if ($n3>$n1){
         $max = $n3;
     }
     return $max;
}
print_r($getLargest(20 , 30 ,40 ))
<!-- 6-- Write a PHP script to see if a year is a leap year or not -->
function leap ($year){
    if ($year % 4 ===  0) {
        print_r("is a leap year ");
    } else {
        print_r("is NOT a leap year ");
    }
}
print_r(leap(1994))

<!--7-- Write a PHP script using for loop to add all the integers between 0 and 30 and display the total -->

function sumation (){
    $start = 0 ; 
    for($i=0 ; $i<=30 ;$i++){
       $start +=$i 
    }
}

