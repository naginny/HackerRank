<?php
	$_fp = fopen("php://stdin", "r");
	fscanf($_fp, "%d", $n);

	$result = array();

	for ($i = 1; $i <= $n; $i++)
	{
		fscanf($_fp, "%d %d", $t, $d);
		$result[$i] = array($i, ($t + $d));
	}


	function cmp($a, $b)
	{
		if ($a[1] == $b[1])
		{
			return ($a[0] < $b[0]) ? -1 : 1;
		}
		return ($a[1] < $b[1]) ? -1 : 1;
	}

	uasort($result, 'cmp');

	foreach ($result as $key => $val)
	{
		print($key.' ');
	}

?>
