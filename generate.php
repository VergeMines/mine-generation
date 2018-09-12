<?php

$mines = array();
function randomizeMines($mineCount, &$mines)
{
	for ($mineCount; $mineCount > 0; $mineCount--) {
		do {
			$mine = random_int(1, 25);
		} while (in_array($mine, $mines));

		$mines[] = $mine;
	}
}

// Start generation
randomizeMines(3, $mines);
var_dump($mines);
