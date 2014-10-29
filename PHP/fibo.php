<?php
  /*
   * Fibonacci numbers
   * Simple program for generating Fibonacci numbers
   * One of the first programs I ever wrote was this,
   * back in 1992, in BASIC, on a Radio Shack Tandy computer.
   * Memories...
   * This was hastily written, but it works. I'll revisit to see
   * what I can do to streamline it.
   */
  
  function fib($lim = 0)
  {
    $a=0; // initialize our counters - we're starting the sequence with 0.
    $b=1;
    
    $ret = $a."<br />".$b;
    $num = $b;
    
    while($num < $lim)
    {
      $num = $a + $b;
  
      // create new pair
      $a = $b; // $b is last num in pair, make it the first num
      $b = $num; // $n is next num in pair, make it the last num
      
      if($num > $lim) break; // we've gone over our limit, just drop it
      $ret .= "<br />".$num;
    }
    
    return $ret;
  }
  
  echo fib(1000);
?>
