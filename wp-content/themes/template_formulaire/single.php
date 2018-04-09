<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<!-- single.php va appeler les "Articles" -->

		<p><?php the_field('title', 13);?></p>
		<p><?php the_field('texte', 13);?></p>
	  
</body>
</html>