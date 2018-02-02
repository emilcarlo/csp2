<?php session_start(); ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php display_title(); ?></title>
	<?php require "partials/externallinks.php" ?>
</head>
<body>
	<header>
		<?php require "partials/navbar.php" ?>
		<?php require "partials/modals.php" ?>
	</header>
	<main>
  		<?php display_content(); ?>
	</main>
	<footer></footer>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>