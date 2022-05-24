<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once "./includes/head.php" ?>
	<link rel="stylesheet" href="./css/books.css">
	<title>Infinity Book | Books</title>
</head>

<body>
	<?php include_once "./includes/nav.php" ?>
	<main>
		<div class="grid-container">

			<?php
			$conn = mysqli_connect("localhost", "admin", "some_pass", "infinitybook");
			$query  = "SELECT * FROM `books`";
			$result = mysqli_query($conn, $query);


			while ($data = $result->fetch_assoc()) {
				echo "
				<div class='book-container'>
				<a href='/book.php/" . $data["BookTitle"] . "'>
				<img src='" . $data["ImageURLL"] . "' alt='book-image'>
				</a>
				<h3>" . $data["BookTitle"] . "</h3>
				</div>
				";
			}

			mysqli_free_result($result);
			mysqli_close($conn);

			?>
		</div>
	</main>
	<?php include_once "./includes/footer.php" ?>
</body>

</html>