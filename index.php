<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./css/index.css" />
	<link rel="stylesheet" href="./css/home.css" />
	<link rel="stylesheet" href="./css/nav.css" />
	<link rel="stylesheet" href="./css/footer.css" />
	<title>Infinity Book | Home</title>
</head>

<body>
	<?php include_once "header.php" ?>

	<main>
		<h1>Infinity Book</h1>
		<form class="search-bar" action="">
			<input class="search-bar__bar" type="text" name="search" id="search" />
			<button class="search-bar__button" type="submit">
				<img src="./img/search-interface-symbol 1.svg" alt="search-icon" />
			</button>
		</form>
		<ul class="category-links">
			<li><a href="">Poetry</a></li>
			<li><a href="">Drama</a></li>
			<li><a href="">Prose</a></li>
			<li><a href="">Nonfiction</a></li>
			<li><a href="">Media</a></li>
		</ul>
		<img class="corner-image" src="./img/home_ill.svg" alt="girl reading on fence" />
	</main>
	<?php include_once "footer.php" ?>

</body>

</html>