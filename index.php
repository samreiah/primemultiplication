<?php

require 'utils/Prime.php';

$prime = new Prime();

// Parse Variables
parse_str(implode('&', array_slice($argv, 1)), $_GET);
$params = $_GET;

if(sizeof($params) == 0) { // there should be params 

  throw new InvalidArgumentException("Error: Please Pass the number of prime numbers Eg : php index.php count=10");
  exit;

} else if(!array_key_exists('count', $params)) { //the parameter key should be 'count'

  throw new InvalidArgumentException("Error: Please Pass the number of prime numbers Eg : php index.php count=10");
  exit;

} else if($params['count'] <= 0) { // should be greater than 0

  throw new InvalidArgumentException("Error: the count of prime numbers should be atleast 1");
  exit;

} else if (!is_int($params['count'])) { // Should be an integer
  
  throw new InvalidArgumentException("Error: the count of prime numbers should be a whole number");
  exit;

}

$x = $y = $prime->getFirstNPrimeNumbers( (int) $params['count']);

$cellSize  = $prime->getcellSize($x[sizeof($x) - 1], $y[sizeof($y) - 1]);

$prime->multiplyAndPrintMatrix($x, $y, $cellSize);


