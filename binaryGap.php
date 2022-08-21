<?
function maxZeros($N)
{
	$maxm = 0;
	$cnt = 0;
    
    $pre = $N & 1; //first
    $N >>= 1;     //next
    
	while ($N) {
		
		if ( !($N & 1) && $pre ) { //if prev == 1 && next == 0
		  $cnt++;
		}
		
		if( ($N & 1) && $cnt){ //counting zero, found 1
			$maxm = max($maxm, $cnt);
			$cnt = 0 ;
            $pre = $N & 1;	
		}
						    
		$N >>= 1;
	}
	return $maxm;
}

?>
