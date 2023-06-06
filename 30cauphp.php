<?php
//Cau 1
echo 'Question 1:';
function isEven($number) {
    if ($number % 2 == 0) {
      return true;
    } else {
      return false;
    }
  }
  
  $number = 135;
  
  if (isEven($number)) {
    echo "The number $number is even.";
  } else {
    echo "The number $number is odd.";
  }
echo '<br>';

//Cau 2
echo 'Question 2:';
function sumOfNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
    }
    return $sum;
  }
  
  $n = 50;
  
  $sum = sumOfNumbers($n);
  
  echo "The sum of numbers from 1 to $n is $sum.";

echo '<br>';

//Cau 3
echo 'Question 3:';
function multiplicationTable(){
    for ($x=1; $x<=10; $x++){
        for ($y=1; $y <= 10; $y++){
            $total= $x * $y;
            echo "$x*$y= $total <br>";
        }
        echo "<br>";
    }
}
echo  multiplicationTable() ;
echo '<br>';

//Cau 4
echo 'Question 4:';
function containsWord($string, $word) {
    if (strpos($string, $word) !== false) {
      return true;
    } else {
      return false;
    }
  }
  
  $string = "Tai lieu hoc tap";
  $word = "lieu";
  
  if (containsWord($string, $word)) {
    echo "The string contains the word $word.";
  } else {
    echo "The string does not contain the word $word.";
  }
echo '<br>';

//Cau 5
echo 'Question 5:';
function findMaxAndMin($array) {
    $max = $array[0];
    $min = $array[0];
  
    foreach ($array as $value) {
      if ($value > $max) {
        $max = $value;
      }
  
      if ($value < $min) {
        $min = $value;
      }
    }
  
    return array($max, $min);
  }
  
  $array = array(1, 5, 3, 2, 4);
  
  $maxAndMin = findMaxAndMin($array);
  
  echo "The maximum value is $maxAndMin[0].";
  echo "The minimum value is $maxAndMin[1].";
echo '<br>';

//Cau 6
echo 'Question 6:';
function sortArray($array) {
    $sortedArray = array();
  
    foreach ($array as $value) {
      $sortedArray[] = $value;
    }
  
    asort($sortedArray);
  
    return $sortedArray;
  }
  
  $array = array(1, 5, 3, 2, 4);
  
  $sortedArray = sortArray($array);
  
  echo "The sorted array is: ";
  print_r($sortedArray);
echo '<br>';

//Cau 7
echo 'Question 7:';
function factorial($n) {
    if ($n <= 1) {
      return 1;
    } else {
      return $n * factorial($n - 1);
    }
  }
  
  $n = 10;
  
  $factorial = factorial($n);
  
  echo "The factorial of a positive integer $n is $factorial.";
echo '<br>';

//Cau 8
echo 'Question 8:';
function isPrime($n) {
    if ($n <= 1) {
      return false;
    }
  
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) {
        return false;
      }
    }
  
    return true;
  }
  
  $start = 1;
  $end = 50;
  
  $primeNumbers = array();
  
  for ($i = $start; $i <= $end; $i++) {
    if (isPrime($i)) {
      $primeNumbers[] = $i;
    }
  }
  
  echo "The prime numbers between $start and $end are: ";
  print_r($primeNumbers);
echo '<br>';

//Cau 9
echo 'Question 9:';
function totalarray($array){
    $sum = 0;
    foreach ($array as $value){
        $sum += $value;
    }
    return $sum;
}
$array = [50,45,4,29,25,100] ;
echo " The sum of the numbers in the array is: " . totalarray($array);
echo "<br>";

//Cau 10
echo 'Question 10:';
function fibonacci($n) {
  if ($n < 0) {
      return - 1;
  } else if ($n == 0 || $n == 1) {
      return $n;
  } else {
      return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
  }
} 
echo "The Fibonacci numbers between 0 and 20 are: " ;
for($i = 0; $i <= 20; $i ++) {
  echo (fibonacci ( $i ) . " ");}
echo " <br> ";
//Cau 11
echo 'Question 11:';
function isArmstrongNumber($number) {
    $digits = str_split($number);
    $total = 0;
  
    foreach ($digits as $digit) {
      $total += pow($digit, count($digits));
    }
  
    return $total == $number;
  }
  
  $number = 1597;
  
  if (isArmstrongNumber($number)) {
    echo "The number $number is an Armstrong number.";
  } else {
    echo "The number $number is not an Armstrong number.";
  }
echo '<br>';

//Cau 12
echo 'Question 12:';
function insertelement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}
$array = array(14,7,1,11,12);
$element = 39;
$position = 4;
$newArray = insertElement($array, $element, $position);
echo " The new array after inserting an element " . $element . " into " . $position . " is: ";
foreach ($newArray as $value) {
    echo $value . ",";
}
echo "<br>" ;

//Cau 13
echo 'Question 13:';
function arrayUnique($array) {
    $array = array_unique($array);
    return $array;
}
$array = array(2,4,5,6,5);
$newArray = arrayUnique($array);
echo "The array after removing duplicate element is: ";
foreach ($newArray as $value) {
    echo $value . " ";
}
echo "<br>";

//Cau 14
echo 'Question 14:';
function findposition($arr, $element) {
    $positions = [];
    foreach ($arr as $index => $value) {
        if ($value == $element) {
            $positions[] = $index;
        }
    }
    return $positions;
}
$array = [7, 25, 14, 85, 33, 95];
$element = 5;
$positions = findposition($array, $element);
echo "The position of $element in an array is: " . implode(", ", $positions);
echo "<br>" ;

//Cau 15
echo 'Question 15:';
function revertString($string){
    return strrev($string);
}
echo revertString("Dang Minh Duc") . "<br>" ;

//Cau 16
echo 'Question 16:';
function calculateelements($array) {
    $count = count($array);
    return $count;
}
$array = [21,5,2002];
echo "The number of elements in an array is " . calculateelements($array);
echo "<br>" ;

//Cau 17
echo 'Question 17:';
// Function to check if a string is a Palindrome
function isPalindrome($string) {

    // Reverse the string
    $reversed_string = strrev($string);
  
    // Compare the original string with the reversed string
    if ($string === $reversed_string) {
      return true;
    } else {
      return false;
    }
  }
  
  // Get the string from the user
  $string = readline("Enter a string: ");
  
  // Check if the string is a Palindrome
  if (isPalindrome($string)) {
    echo "The string is a Palindrome.";
  } else {
    echo "The string is not a Palindrome.";
  }
echo '<br>';

//Cau 18
echo 'Question 18:';
function countOccurrences($array, $element) {
   $count = 0;
   foreach ($array as $value) {
       if ($value == $element) {
           $count++;
       }
   }
   return $count;
}

$array = array( 2, 4, 2, 5);
$element = 2;
$occurrences = countOccurrences($array, $element);
echo "The number of occurences of an element " . $element . " in an array is: " . $occurrences;
echo "<br>";

//Cau 19
echo 'Question 19:';
function arrDecrease($array) {
    rsort($array); 
    echo " The sorted array in descending order is : " ;
      foreach( $array as $value) {
          echo $value .  "," ;
}
}
arrDecrease($array = [3,5,7,9]);
echo "<br>" ;

//Cau 20
echo 'Question 20:';
function addElement($array, $element, $position) {
    if ($position == "start") {
        array_unshift($array, $element);
    } elseif ($position == "end") {
        array_push($array, $element);
    }
    return $array;
 }
 
 $array = array(1, 2, 4, 5);
 $element = 14;
 $position = "end";
 $newArray = addElement($array, $element, $position);
 echo "The new array after inserting an element " . $element . " into " . $position . " is: ";
 foreach ($newArray as $value) {
    echo $value . " ";
 }
 echo "<br>";

//Cau 21
echo 'Question 21:';
function findSecondLargest($array) {
    $max = $array[0]; 
        $secondMax = null; 
        foreach ($array as $num) {
            if ($num > $max) {
                $secondMax = $max;  
                $max = $num; 
            } elseif ($num != $max && ($secondMax === null || $num > $secondMax)) {
                $secondMax = $num;
            }
        }
        echo "The second largest number in the array is : $secondMax";
    }
$numbers = [14,35,49,80,7];
findSecondLargest($numbers);
echo "<br>";

//Cau 22
echo 'Question 22:';
function finducbc($a, $b) {
  $ucln = $a;
  $temp = $b;
  while ($temp != 0) {
      $r = $ucln % $temp;
      $ucln = $temp;
      $temp = $r;
  }
  $bcnn = ($a * $b) / $ucln;
  echo "The greatest common divisor : $ucln and the least common multiple : $bcnn";

}
      finducbc(7,14);
echo "<br>";

//Cau 23
echo 'Question 23:';
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
      if ($number % $i == 0) {
        $sum += $i;
      }
    }
  
    return $sum == $number;
  }
  
  $number = 6;
  
  if (isPerfectNumber($number)) {
    echo "The number $number is a perfect number.";
  } else {
    echo "The number $number is not a perfect number.";
  }
echo '<br>';

//Cau 24
echo 'Question 24:';
function findLargestOddNumber(array $array) {
    $largestOddNumber = -1;
  
    foreach ($array as $number) {
      if ($number % 2 == 1 && $number > $largestOddNumber) {
        $largestOddNumber = $number;
      }
    }
  
    return $largestOddNumber;
  }
  
  $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  
  $largestOddNumber = findLargestOddNumber($array);
  
  echo "The largest odd number in the array is $largestOddNumber";
echo '<br>';

//Cau 25
echo 'Question 25:';
function Prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
if (isPrime(14)) {
    echo " is the prime number.";
} else {
    echo " is not the prime number.";
}
echo "<br>" ;

//Cau 26
echo 'Question 26:';
function findLargestPositiveNumber($array) {
    // Initialize the largest number to be the first element of the array.
    $largestNumber = $array[0];
  
    // Iterate through the array.
    foreach ($array as $number) {
      // If the number is positive and greater than the current largest number, update the largest number.
      if ($number > 0 && $number > $largestNumber) {
        $largestNumber = $number;
      }
    }
  
    // Return the largest number.
    return $largestNumber;
  }
  
  // Create an array of numbers.
  $array = [1, 2, 3, -1, 4, 5];
  
  // Find the largest positive number in the array.
  $largestPositiveNumber = findLargestPositiveNumber($array);
  
  // Print the largest positive number.
  echo "The largest positive number in the array is $largestPositiveNumber.";
echo '<br>';

//Cau 27
echo 'Question 27:';
function findLargestNegativeNumber($array) {
    // Initialize the largest number to be the first element of the array.
    $largestNumber = $array[0];
  
    // Iterate through the array.
    foreach ($array as $number) {
      // If the number is negative and greater than the current largest number, update the largest number.
      if ($number < 0 && $number < $largestNumber) {
        $largestNumber = $number;
      }
    }
  
    // Return the largest number.
    return $largestNumber;
  }
  
  // Create an array of numbers.
  $array = [1, 2, 3, -1, 4, 5];
  
  // Find the largest negative number in the array.
  $largestNegativeNumber = findLargestNegativeNumber($array);
  
  // Print the largest negative number.
  echo "The largest negative number in the array is $largestNegativeNumber.";
echo '<br>';

//Cau 28
echo 'Question 28:';
function sumOddNumbers($n) {
    // Initialize the sum to 0.
    $sum = 0;
  
    // Iterate from 1 to n.
    for ($i = 1; $i <= $n; $i += 2) {
      // Add the current number to the sum.
      $sum += $i;
    }
  
    // Return the sum.
    return $sum;
  }
  
  // Get the number from the user.
  $n = readline("Enter a number: ");
  
  // Calculate the sum of odd numbers from 1 to n.
  $sum = sumOddNumbers($n);
  
  // Print the sum.
  echo "The sum of odd numbers from 1 to $n is $sum.";
echo '<br>';

//Cau 29
echo 'Question 29:';
function findPerfectSquares($min, $max) {
    $perfectSquares = [];
  
    for ($i = $min; $i <= $max; $i++) {
      $sqrt = sqrt($i);
  
      if ($sqrt * $sqrt == $i) {
        $perfectSquares[] = $i;
      }
    }
  
    return $perfectSquares;
  }
  
  $min = 1;
  $max = 100;
  
  $perfectSquares = findPerfectSquares($min, $max);
  
  echo "The perfect squares within the interval $min to $max are: ";
  
  foreach ($perfectSquares as $perfectSquare) {
    echo $perfectSquare . " ";
  }
  
  echo "\n";
echo '<br>';

//Cau 30
echo 'Question 30:';
function isSubstring($haystack, $needle) {
    $pos = strpos($haystack, $needle);
  
    if ($pos !== false) {
      return true;
    } else {
      return false;
    }
  }
  
  $haystack = "This is a string";
  $needle = "string";
  
  $result = isSubstring($haystack, $needle);
  
  if ($result) {
    echo "The string '$needle' is a substring of the string '$haystack'.";
  } else {
    echo "The string '$needle' is not a substring of the string '$haystack'.";
  }
echo '<br>';