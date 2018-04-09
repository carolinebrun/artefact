<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php
		get_header();
	?>
	<h1>
		<?php the_title();
		?>
		</h1>
		
	  <p>Ceci est une page par défaut</p>
	  <?php
		get_footer();
	?>
</body>
</html>