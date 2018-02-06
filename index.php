<?php 
	if (isset($_POST['word1'])) {
		$word1 = $_POST['word1'];
		$word2 = $_POST['word2'];
		$word3 = $_POST['word3'];
		$word4 = $_POST['word4'];
		$word5 = $_POST['word5'];
		$word6 = $_POST['word6'];
		$word7 = $_POST['word7'];
		$word8 = $_POST['word8'];
		$content = '
			<div id=\'opmaak\'>
			<h2>Er heerst paniek...</h2>
			<p>Er heerst paniek in het koninkrijk '.$word3.'. Koning '.$word6.' is ten einde raad en als koning '.$word6.' ten einde raad is, dan roept hij zijn ten-einde-raadsheer '.$word2.'.</p>
			<p>"'.$word2.'! Het is een ramp! Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn '.$word1.' is verdwenen! Zo maar, zonder waarschuwing. En ik had net '.$word5.' voor hem gekocht!"</p>
			<p>"Majesteit, uw '.$word1.' komt vast vanzelf weer terug?"</p>
			<p>"Ja, da\'s leuk en aardig, maar hoe moet ik in de tussentijd '.$word8.' leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw '.$word7.' voor gebruiken.</p>
			<p>"'.$word2.', je hebt helemaal gelijk! Wat zou ik moeten doen als ik jou niet had."</p>
			<p>"'.$word4.', Sire."</p>
			</div>';
	} else {
		$content = '
			<form method="POST" autocomplete="off">
				<table>
					<tr>
						<td>Welk dier zou je nooit als huisdier willen hebben?</td>
						<td><input type="text" name="word1" required></td>
					</tr>
					<tr>
						<td>Wie is de belangrijkste persoon in je leven?</td>
						<td><input type="text" name="word2" required></td>
					</tr>
					<tr>
						<td>In welk land zou je graag willen wonen?</td>
						<td><input type="text" name="word3" required></td>
					</tr>
					<tr>
						<td>Wat doe je als je je verveelt?</td>
						<td><input type="text" name="word4" required></td>
					</tr>
					<tr>
						<td>Met welk speelgoed speelde je als kind het meest?</td>
						<td><input type="text" name="word5" required></td>
					</tr>
					<tr>
						<td>Bij welke docent spijbel je het liefst?</td>
						<td><input type="text" name="word6" required></td>
					</tr>
					<tr>
						<td>Als je &euro;100.000,- had, wat zou je dan kopen?</td>
						<td><input type="text" name="word7" required></td>
					</tr>
					<tr>
						<td>Wat is je favoriete bezigheid?</td>
						<td><input type="text" name="word8" required></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit">Versturen</button></td>
					</tr>
				</table>
			</form>';
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Madlibs</title>
</head>
<body>
	<h1>Mad Libs</h1>
	<nav>
		<li><a href="index.php">Er heerst paniek...</a></li>
		<li><a href="second-index.php">Onkunde</a></li>
	</nav>
	<?php 
	echo $content;
	?>
	<footer><p id="footer-text">Deze website is gemaakt door Liam van Maaren</p></footer>
</body>
</html>

