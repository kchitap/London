<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>OSO - Homepage</title>
		<link type="text/css" rel="stylesheet" href="css/index.css">
	</head>

	<body>
	<div class="container">

		<section class="topLeft">
			<header>
		
			<h1>Odd Student Out</h1>

			</header>
		</section>

		<section class="topRight">
			<?php include "inc/nav.inc"; ?>
		</section>

		<div class="center">
			<img src="images/odd.png" alt="A picture of several similar stick figures that are black and one that is red">
		</div>

		<section class="bottomLeft">
			<h2>Students' Majors and Jobs</h2>
			<p>Two of these students have had jobs relating to their majors and one has had a <u>job not relating to their major</u>. Learn about their majors and jobs!</p>
		</section>

		<section class="bottomRight">
			<a href="students.php">Read about these students!</a>
		</section>
		
		<?php include "inc/footer.inc"; ?>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/menu-highlighter.js"></script>
	</div>
	</body>

</html>