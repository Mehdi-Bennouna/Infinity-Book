<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once "./includes/head.php" ?>
	<link rel="stylesheet" href="./css/book.css">
	<title>Infinity Book | Books</title>
</head>

<body>
	<?php include_once "./includes/nav.php" ?>
	<main>
		<div class="single_book_container">

			<?php
			$myStr = $_SERVER['QUERY_STRING'];

			$myStr2 = str_replace("search=", "", $myStr);
			$query_data = str_replace("+", " ", $myStr2);


			$query = "SELECT * FROM books WHERE BookTitle=\"" . $query_data . "\"";
			$conn = mysqli_connect("localhost", "admin", "some_pass", "infinitybook");

			$result = mysqli_query($conn, $query);

			$data = mysqli_fetch_assoc($result);



			mysqli_free_result($result);
			mysqli_close($conn);
			echo "
				<div class='left'>
				<img src='" . $data['ImageURLL'] . "'>
				</div>
				<div class='right'>
				<h1>" . $data['BookTitle'] . "</h1>
				<h2 id='author'>" . $data['BookAuthor'] . "</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ducimus debitis, facilis illum eaque assumenda officia beatae ex praesentium quam cum, harum sequi, non dolores! Officiis impedit corrupti iste? Corporis.</p>
				<h2 class='bot'>Year : " . $data['YearOfPublication'] . "</h2>
				<h2 class='bot'>Publisher : " . $data['Publisher'] . "</h2>
				</div>"
			?>


		</div>
	</main>
	<?php include_once "./includes/footer.php" ?>
</body>

</html>