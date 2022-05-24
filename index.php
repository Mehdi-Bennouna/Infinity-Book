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
		<form class="search-bar" action="/book.php">

			<input class="search-bar__bar" type="text" name="search" id="search" />
			<button id="search_button" class="search-bar__button" type="submit">
				<img src="./img/search-interface-symbol 1.svg" alt="search-icon" />
			</button>
		</form>
		<?php
		// $conn = mysqli_connect("localhost", "admin", "some_pass", "infinitybook");

		// function search($conn, $seach_query)
		// {
		// 	$query  = "SELECT `ISBN` FROM `books` WHERE `BookTitle`=" . $seach_query;
		// 	$result = mysqli_query($conn, $query);

		// 	$data = mysqli_fetch_assoc($result);

		// 	mysqli_free_result($result);
		// }

		// mysqli_close($conn);
		?>
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
	<script src="./javascript/index.js"></script>
</body>

</html>