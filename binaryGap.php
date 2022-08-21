<?php

function maxZeros($N)
{
	$maxm = -1; 	// longest consecutive 0's
  $cnt = 0;       // temporary counter

	while ( $N ) {
     $cnt = !($N & 1) ? $cnt +1 : 0; //count zeroes
     $maxm = max($maxm, $cnt);       
     $N >>= 1;                       //next element  
	}
	return $maxm;
}

 
	$N = 1115; 
	echo "\nElem: " .  maxZeros($N) ."<br>\n...";
