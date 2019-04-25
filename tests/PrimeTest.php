<?php

require 'vendor/autoload.php';
require 'utils/Prime.php';

use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{

    private $prime;

    protected function setUp(): void
    {
      $this->prime = new Prime();
    }

    public function testGetFirstNPrimeNumbers()
    {
      $count        = 10;
      $primeNumbers = $this->prime->getFirstNPrimeNumbers(10);
      
      // Check if it returns same count
      $this->assertCount($count, $primeNumbers);


      foreach($primeNumbers as $num) {
        $this->assertTrue($this->prime->isPrime($num));
      }

    }

    public function testGetcellSize() 
    {
      $maximumnumber = 10;
      $cellsize      = strlen((string) $maximumnumber) + 2;

      $newCellSize = $this->prime->getcellSize(5, 2);

      $this->assertEquals($cellsize, $newCellSize);
    }

    public function testIsPrime()
    {
      $primeNumber = 2;
      $this->assertTrue($this->prime->isPrime($primeNumber));

      $nonPrimeNumber = 4;
      $this->assertFalse($this->prime->isPrime($nonPrimeNumber));
    }


}