<?php 
	$text_color = "#000"; 
	$bg_color   = "#FFF";

	//Si l'utilisateur a déjà des préférences
	if(isset($_COOKIE["text_color"]) && isset($_COOKIE["bg_color"])){
		$text_color = $_COOKIE["text_color"]; 
		$bg_color   = $_COOKIE["bg_color"];
	} 


	if(!empty($_POST['text_color']) && !empty($_POST['bg_color'])){
		setcookie('text_color', $_POST['text_color'], time() + 60, null, null, false, true); 
		setcookie('bg_color'  , $_POST['bg_color'], time() + 60, null, null, false, true); 
		$text_color = $_POST["text_color"]; 
		$bg_color   = $_POST["bg_color"];
	} 
?>