<?php

/*

	Volgens het blaadje: de code van vraag b mag niet in het script opgenomen worden.
	Ik neem aan dat hiermee bedoelt wordt dat de code niet overgetypt mag worden zoals hieronder.
	En dat je aangemoedigd wordt om het bestand opdracht3b.php te includen.
*/

/*function pyramideNummerDing($length = 9) {
	$result = "";
	for ($i=1; $i <= $length; $i++) {
		for ($n = $i; $n <= $length; $n++) {
			$result .= $i;
		}
		$result .= "<br/>";
	}
	return $result;
}
*/

ob_start();
include 'opdracht3b.php';
ob_end_clean();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht 3c</title>
</head>
<body>
	<?php 
//let op! Gebruik van short tags kan mogelijk niet werken in oude php versies!
	if(isset($_POST['pyramidLength'])):
		$pyramidLength = $_POST['pyramidLength'];
		if(is_numeric($pyramidLength) && $pyramidLength <= 9 && $pyramidLength >= 1) {
			echo pyramideNummerDing($pyramidLength);
		}
		else {
			echo 'Pyramide lengte veld is niet numeriek of valt buiten de range.';
		}
	else: ?>
		<form action="opdracht3c.php" method="POST">
			<label for="pyramidLength">Pyramide lengte: </label>
			<select name="pyramidLength" id="pyramidLength">
				<?php for ($i=1; $i <= 9; $i++): ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php endfor; ?>
			</select><br/>
			<input type="submit" value="Go">
		</form>
	<?php endif; ?>
</body>
</html>
