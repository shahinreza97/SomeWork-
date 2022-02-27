<?php
// // + use 
// $x = 10;
// $y= 7;
// $xy= $x + $y;
// echo "$x + $y = $xy <br/>";
// // - use 
// $x = 10;
// $y= 7;
// $xy= $x - $y;
// echo "$x - $y = $xy <br/>";
// // * use
// $x = 10;
// $y= 7;
// $xy= $x * $y;
// echo "$x * $y = $xy <br/>";
// // / use
// $x = 10;
// $y= 7;
// $xy= $x / $y;
// echo "$x / $y = $xy <br/>";
// // % use
// $x = 10;
// $y= 7;
// $xy= $x % $y;
// echo "$x % $y = $xy <br/>";
// ---------------------------------------------------------------------------------------
// ### Problem NO 03 ###
// one Variable but Every Value Change. 
// $x = 8;
// echo "Value is now 8 <br/>";
// $x+=2;
// echo "Add 2. Value is now $x <br/>";
// $x-=4;
// echo "Subtract 4. Value is now $x <br/>";
// $x*=5;
// echo "Multiply by 5. Value is now $x <br/>";
// $x/=3;
// echo "Divide by 3. Value is now $x <br/>";
// $x++;
// echo "Increment value by one. Value is now $x <br/>";
// $x--;
// echo "Decrement value by one. Value is now $x <br/>";
// --------------------------------------------------------------------------------------------
// $x = 50;
// $y = 100;
// if ($x == 60 or $y ==100) {
//     echo "shahin Reza";
// }
// $x = date("l");
// if ($x == "Monday") {
//     echo "Today is Monday <br/>";
// }
// $x = date("D");
// if ($x == "Mon") {
//     echo "Today is Monday <br/>";
// }
// echo date ("d") ."</br>";
// echo date ("j") ."</br>";
// echo date ("F") ."</br>";
// echo date ("M") ."</br>";;
// echo date ("Y") ."</br>";;
// echo date ("G") ."</br>";;
// $x = 100;
// if ($x == 99) {
//     echo "Your condition is right.";
// } else{
//     echo " Your Condition Is Wrong. </br>";
// }
// $x = 100; 
// if ($x == 100) {
//     echo "Your condition is right.</br>";
// } else{
//     echo " Your Condition Is Wrong.";
// }
// $x = 100; 
// if ($x == 105) {
//     echo "Your condition is right.";
// } elseif ($x == 150){
//     echo " Your Condition Is Wrong";
// }elseif ($x == 99) {
//     echo " Your Condition Is Wrong";
// }else{
//     echo "No Condition Matched";
// }
// $x = date ("F");
// if ($x == "February") {
//     echo "It's August, so it's really hot.";
// } else{
//     echo "Not August, so at least not in the peak of the heat. </br>";
// }
$x = 55; 
if ($x >=80 and $x <=100) {
    echo "Grade A+";
} elseif ($x >=70 and $x <=79){
    echo "Grade A";
}elseif ($x >=60 and $x <=69) {
    echo "Grade A-";
}elseif ($x >=50 and $x <=59) {
    echo "Grade B";
}elseif ($x >=40 and $x <=49) {
    echo "Grade C";
}elseif ($x >=33 and $x <=39) {
    echo "Grade D";
}elseif ($x >=00 and $x <=32) {
    echo "Fail";
}else {
     echo "Your Mark Was Wrong";
}
?>