<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once "./includes/head.php" ?>
	<link rel="stylesheet" href="./css/home.css">
	<title>Infinity Book | Home</title>
</head>

<body>
	<?php include_once "./includes/nav.php" ?>

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

	<?php include_once "./includes/footer.php" ?>

</body>

</html>