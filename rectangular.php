<?php

	$input = fopen("php://stdin", "r");
	fscanf($input, "%d", $n);
	
	$minX = 0;
	$minY = 0;
	
	for ($i = 0; $i < $n; $i++)
    {
		fscanf($input, "%d %d", $x, $y);

		if (($minX == 0) || ($x < $minX))
		{
			  $minX = $x;  
		}
		if (($minY == 0) || ($y < $minY))
		{
			  $minY = $y;  
		}
    }
	
	print($minX * $minY);

?>
