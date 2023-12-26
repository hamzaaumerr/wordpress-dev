<?php
// assign the values of the variables
$firstNumber = 2;
$secondNumber = 5;
$thirdNumber = 3;
// check which number is the greatest
// if the first number is the greatest
if($firstNumber > $secondNumber && $firstNumber > $thirdNumber){
    echo "The greatest number is: ".$firstNumber;
}
// if the second number is the greatest
elseif($secondNumber > $firstNumber && $secondNumber > $thirdNumber)
{
    echo "The greatest number is: ".$secondNumber;
}
// if the third number is the greatest
else{
    echo "The greatest number is: ".$thirdNumber;
};
?>