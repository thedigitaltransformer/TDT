<?php

$type = stripslashes(trim($_POST['civilite']));
$prenom = stripslashes(trim($_POST['prenom']));
$nom = stripslashes(trim($_POST['nom']));
$expediteur = stripslashes(trim($_POST['email']));
$sujet = stripslashes(trim($_POST['sujet']));
$message = stripslashes(trim($_POST['message']));
$phone = stripslashes(trim($_POST['phone']));
$referer = stripslashes(trim($_POST['referer']));

?>

<html>
<head></head>
<body>
<ul>

	<li><?= $type; ?> - <?= $prenom; ?> <?= $nom; ?> </li>
	<li><?= $sujet; ?></li>
	<li><?= $expediteur; ?></li>
	<li><?= $message; ?></li>
	<li><?= $phone; ?></li>
  	<li><?= $referer; ?> </li>


</ul>




</body>

</html>
