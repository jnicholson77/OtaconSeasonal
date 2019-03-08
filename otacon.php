<?php
  $username = $_Post['txtUsername'];
  $comment = $_POST['txtComment'];

	$posting = "<section class='comment'><p class='posting'>".$comment."</p><p class='signature'>".$username."</p></section>";

	$toFile = fopen("otaconforum.txt", "a");
	fwrite($toFile, $posting);
	fclose($toFile);

	header("Refresh: 0 url=otaconforum.php");
?>
