<?php
// This code is part of a CTF challenge. HF with the pass ;), the page is not available online.
$username = $_GET['uname'];
$password = $_GET['psw'];

if ($username === 'admin' and $password === 'y0uW1llN3v3RGueszzz_me!'){
	$a = scandir(getcwd());
	echo "Hello admin! <br>These are the files in the directory: <br>";
	foreach($a as $value) {
	    echo $value, '<br>';
}
}
?>
