<?php

class Prime {

  public function __construct() {

  }

  public function getFirstNPrimeNumbers($n) {
    
    $primeNumbers = [];  // Array to hold the generated primenumbers
    $count  = 0;  // Initially no prime numbers generated
    $num    = 0;  // Iteration Starts from 1
    
    while ($count < $n )  // Interate till we generate $n prime numbers
    {   
        $counter = 0;  // Variable to count all divisible factors
        for ( $i=1; $i<=$num; $i++)  {   //all divisible factors
            if (($num % $i)==0)  
            {  
                $counter++;  
            }
        }
  
        
        // prime requires 2 rules ( divisible by 1 and divisible by itself)
        // hence check the variable has only 2 divisible factors
        if ($counter == 2)  {  
            array_push($primeNumbers, $num); // Push the prime number to the stack
            $count=$count+1;  // Increment the primenumber count
        }
    
        $num=$num+1;  
    } 
  
    return $primeNumbers;
  }
  
  
  public function getcellSize($maxX, $maxY) {
  
    // Get maximum multiplication number
    // Find the size of digits
    // append two spaces 
    // That will be the cell size
  
  
    $maximumresult      = $maxX * $maxY;
    $maximumNumberSize  = strlen((string) $maximumresult);
  
    return $maximumNumberSize + 2;
  
  }
  
  public function multiplyAndPrintMatrix($x, $y, $cellSize) {
  
    // Initially print blank space
    // then a pipe symbol
    echo str_pad('', $cellSize ,' ', STR_PAD_RIGHT ).'|';
    // Now print the array values with space
    foreach($x as $xval) {
      echo str_pad($xval, $cellSize ,' ', STR_PAD_RIGHT );
    }
  
    echo PHP_EOL;
  
    // Blank line at the bottom of top x values
    echo str_repeat('-', $cellSize ) . '+' . str_repeat('-', $cellSize * sizeof($x) );
  
  
    echo PHP_EOL;
  
    // Multiplication
  
    foreach($y as $yval) {
      // First print the y value
      echo str_pad($yval, $cellSize ,' ', STR_PAD_RIGHT ).'|';
      foreach($x as $xval) {
        echo str_pad(($xval * $yval), $cellSize ,' ', STR_PAD_RIGHT );
      }
      echo PHP_EOL;
    }
  
  }

  public function isPrime($num) {

    if($num == 1)
        return false;

    if($num == 2)
        return true;

    if($num % 2 == 0) {
        return false;
    }

    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
  }

}
