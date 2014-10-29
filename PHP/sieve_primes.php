<?php
 /*
  * Sieve of Eratosthenes
  *
  * Starting with 2, each time we find a prime number, eliminate
  * its multiples from our search criteria to speed the search up.
  * http://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
  *
  */
 
  function sieve($x = 0) // the high end we want to check for primes
  {
    $primes = array();
    
    for($z = 0;$z <= $x;$z++)
      $primes[$z] = true;
      
    $primes[0] = false;
    $primes[1] = false;
    
    $m = sqrt($x); // by the time we hit the square root of our limit, everything remaining will be prime
    $ret = '';
    for($i = 2;$i < $m;$i++)
    {
      if($primes[$i])
      {
        for($j = $i * $i; $j < $x;$j += $i) // increment by multiples of our prime number, set them all to false
          $primes[$j] = false;
      }
    }
    
    return $primes;
  }
  
  $res = sieve(1000);
  // $res contains an array from 0 to our limit.
  // We need to print out every array key whose value is true to get our numbers.
  
  foreach($res as $key => $val)
  {
    if($val > 0)
      echo $key . "<br />";
  }
?>