<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
				<?php
	  include('./inc/title.php');
	  ?>
		<link rel="stylesheet" href="css/odd.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="sss/sss.min.js"></script>
		<link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
		<script>jQuery(function($) {$('.slider').sss();});</script>
	</head>

	<body>
		<div class="grid">
		<header>

		<?php include('./inc/page-header.php');?>
			<?php include('./inc/nav.php');?>

		</header>

		<div class="hero-image">
			<div class="hero-text">
				<h1>Political Science</h1>
				<p>Study and Practice</p>
			</div>
		</div>

		<aside>
		<div class="slider">
			<img src="images/Kaleb.jpg" alt="Kaleb" />
			<img src="images/CityHall.jpeg"  alt="CityHall" />
			<img src="images/Government.png" alt="Government" />
			<img src="images/Books.jpg" alt="Books" />
		</div>
		</aside>

		<article>
		<section class="ContentBlock" id="KalebAbout">

			<h2>Hometown</h2>
			<p>I am from Rochester New York and attended high school in the city of Rochester. I have lived within 30 minutes of the city of Rochester for my entire life.</p>

		</section>

		<section class="ContentBlock" id="KalebPoliSci">

			<h2>Theoretical Politics</h2>
			<p>My Political Science major has a focus on theoretical political science and the use of models in research. Using this discipline I plan on completing research in the field of voting institutions, outcomes, and logical choice in voting.</p>

		</section>

		<section class="ContentBlock" id="KalebCareer">

			<h2>Working at Home</h2>
			<p> For years I've wanted to work in government and public service in some way, hopefully in Rochester, my hometown.</p>

		</section>
		</article>


	<?php
	  include('./inc/menu-highlighter.php');
	  ?>
	</div>
	</body>

</html>