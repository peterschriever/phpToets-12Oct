<?php

$stripfiguren = array(
	'Porky Pig' => 'pig',
	'Daffy Duck' => 'dick',
	'Speedy Gonzales' => 'mouse',
	'Donald Duck' => 'duck',
	'Daisy Duck' => 'duck'
);

foreach ($stripfiguren as $name => $type) {
	echo $name." is a ".$type."<br/>";
}

?>