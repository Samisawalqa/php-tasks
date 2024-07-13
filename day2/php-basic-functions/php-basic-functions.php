<?php

/////  1

// function primeCheck($x){ 
//     if ($x == 1) return 0;
//     for ($i = 2; $i <= sqrt($x); $i++){
//          if ($x % $i == 0) return 0;
// }
// return 1;
// }

// echo (primeCheck(4));


/////  2

// function reverse_str($a){
//     return strrev($a);
// }
// echo (reverse_str('orange'));


////   3

// function lowerCaseCheck($a){
//     if($a === strtolower($a)) echo 'string is ok';
//     else echo 'string not ok';
// }
// lowerCaseCheck('helAloo lksfsdf');


////   4

// function swap($x , $y){
//     $z = $x;
//     $x = $y;
//     $y = $z;
//     return "$x  $y";
// }
// $num1 = 10;
// $num2 = 5;
// echo swap($num1,$num2);


////   5


// function swap($x , $y){
//     $z = $x;
//     $x = $y;
//     $y = $z;
//     return "$x  $y";
// }
// $num1 = 10;
// $num2 = 5;
// echo swap($num1,$num2);


/////   6


// function armsTest($number){
//     $sum = 0;
//     $x = $number;
//     while($x != 0 ){
//         $res = $x % 10;
//         $sum += $sum + $res*$res*$res;
//         $x = $x / 10;
//     }

//     if($number == $sum){
//     return 'armstrong number';
// }else{
//     return 'not armstrong number';}
// }

// echo armsTest(1);


/////   7


// function revTest($str){
//     if($str == strrev($str)){
//         return 'ok';
//     } else {
//         return 'not ok';
//     }
// }

// echo revTest('12344321');


/////  8



// function uniqueArray($myArray){
//     $uniqueArr = array();
//     foreach($myArray as $ele){
//         if(!in_array($ele , $uniqueArr)){
//             $uniqueArr[] = $ele;
//         }
//     }
//     print_r($uniqueArr);
// }
// uniqueArray([1,1,2,3,4,4,5,5])

?>