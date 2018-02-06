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
			<h2>Onkunde</h2>
			<p>Er zij veel mensen die niet kunnen '.$word1.'.</p>
			<p>Neem nou '.$word2.'. Met behulp van een '.$word4.' of zelfs '.$word3.' kan '.$word2.' niet '.$word1.'.</p> 
			<p>Dat heeft niet te maken met '.$word5.', maar een teveel aan '.$word6.'.</p>
			<p>Te veel '.$word6.' leidt tot '.$word7.' en dat is niet goed als je wilt '.$word1.'.</p> 
			<p>Helaas voor '.$word2.'.</p>
			</div>';
	} else {
		$content = '
			<form method="POST" autocomplete="off">
				<table>
					<tr>
						<td>Wat zou je graag willen kunnen?</td>
						<td><input type="text" name="word1" required></td>
					</tr>
					<tr>
						<td>Met welke persoon kun je goed opschieten?</td>
						<td><input type="text" name="word2" required></td>
					</tr>
					<tr>
						<td>Wat is je favoriete getal?</td>
						<td><input type="text" name="word3" required></td>
					</tr>
					<tr>
						<td>Wat heb je als je altijd op vakantie gaat?</td>
						<td><input type="text" name="word4" required></td>
					</tr>
					<tr>
						<td>Wat is je beste persoonlijke eigenschap?</td>
						<td><input type="text" name="word5" required></td>
					</tr>
					<tr>
						<td>Wat is je slechtste persoonlijke eigenschap?</td>
						<td><input type="text" name="word6" required></td>
					</tr>
					<tr>
						<td>Wat is het ergste dat je kan overkomen?</td>
						<td><input type="text" name="word7" required></td>
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

