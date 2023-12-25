<?php
$firstNumber = 2;
$secondNumber = 5;
$thirdNumber = 3;
// greatest number between these 3 numbers
if($firstNumber > $secondNumber && $firstNumber > $thirdNumber){
    echo "The greatest number is: ".$firstNumber;
}
elseif($secondNumber > $firstNumber && $secondNumber > $thirdNumber)
{
    echo "The greatest number is: ".$secondNumber;
}
else{
    echo "The greatest number is: ".$thirdNumber;
};
?>