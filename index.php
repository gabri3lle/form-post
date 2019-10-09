<?php

if($_POST){
	$nome = $_POST['texto'];
	echo '<h4> '.$nome.'</h4>';

}else{

}













?>

<form method="post" action="index.php">
	<input type="text" name="texto">
	<button type="submit">Enviar</button>
</form>