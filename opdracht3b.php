<?php

function pyramideNummerDing($length = 9) {
	$result = "";
	for ($i=1; $i <= $length; $i++) {
		for ($n = $i; $n <= $length; $n++) {
			$result .= $i;
		}
		$result .= "<br/>";
	}
	return $result;
}

echo pyramideNummerDing(4);

?>