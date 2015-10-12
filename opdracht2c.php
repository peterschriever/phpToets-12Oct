<?php

$stripfiguren = array(
	'Porky Pig' => 'pig',
	'Daffy Duck' => 'duck',
	'Speedy Gonzales' => 'mouse',
	'Donald Duck' => 'duck',
	'Daisy Duck' => 'duck'
);

$show = 'duck';
echo "show all the: ".$show."s<br/><hr>";

foreach ($stripfiguren as $name => $type) {
	if($show == $type)
		echo $name." is a ".$type."<br/>";
}

?>