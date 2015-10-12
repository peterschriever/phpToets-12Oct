<?php

$tekenfilms = array(
	'Bugs Bunny',
	'Tweety',
	'Wile E. Coyote',
	'Elmer Fud',
	'Sylvester',
	'Road Runner'
); // numerieke indexes worden automatisch toegevoegd..

foreach ($tekenfilms as $k => $tekenfilm) {
	echo $k." => "; // numerieke index / key
	echo $tekenfilm."</br>";
}

?>