<?php  
	require('includes/prefs.php');
?>

<!doctype html>
<html lang="fr">
	<head>
		<title>Palette Couleurs</title>
		<meta charset="utf-8" />
		<?php  
			require('css/prefs_style.tdn');
		?>
		<script src="js/jquery.js"></script>
		<script src="js/colorpicker.js"></script>
		<link rel="stylesheet" href="css/colorpicker.css">
	</head>
	<body>
		<h1>Sélectionnez vos préférences !</h1>
		<form method="post">
			<label for="text_color">Choisissez votre couleur de texte:</label>
			<input type="text" name="text_color" id="text_color"/>
			
			<br/>

			<label for="bg_color">Choisissez votre couleur de fond:</label>
			<input type="text" name="bg_color" id="bg_color"/>

			<br/>

			<input type="submit" value="Valider" />
		</form>

		<a href="toto.php">Aller sur Toto</a>

		<script>
			$('#text_color, #bg_color').ColorPicker({
				onSubmit: function(hsb, hex, rgb, el) {
					$(el).val("#" + hex);
					$(el).ColorPickerHide();
				},
				onBeforeShow: function () {
					$(this).ColorPickerSetColor(this.value);
				}
			})
			.bind('keyup', function(){
				$(this).ColorPickerSetColor(this.value);
			});
		</script>
	</body>
</html>