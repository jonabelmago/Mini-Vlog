<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MiniVlog</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>

<body>
	<section class="sub-header">
		<nav>
			<a href="home.php"><img src="../images/minilogo.png"> </a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="../index.php">Home</a> </li>
					<li><a href="../pages/profile.php">Profile</a> </li>
					<li><a href="../pages/groupmember.php">Group Members</a> </li>
					<li><a href="../pages/following.php">following</a> </li>
					<li><a href="../pages/saved.php">saved</a> </li>
					<li><a href="../pages/aboutipt.php">About IPT</a> </li>
					<li><a href="../pages/about.php">About Us</a> </li>
					<li><a href="../pages/contacts.php">Contacs</a> </li>
					<li><a href="../pages/myquote.php">My Quote</a> </li>
					<li><a href="../pages/termsandcondition.php">Terms and Condition</a> </li>
					<li><a href="pages/logout.php">Log out</a> </li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<a href="" class="hero-btn">Group Member</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<?php
					$xmGroupmember = simplexml_load_file(../xm/Pascual.lubrin.lingon.mago_IT2B_finalproject_MiniVlog.xml) or die(Failed to Load); $count = 1;
					foreach ($xmlGroupmember->children() $Groupmember ?>
				<img src="../images/pascual.png">
				<div>
					<h3>John Lander Pascual</h3><p> Hello, my name is Lander and I'm a software engineer. I've been working in the software development industry for the past five years, and I've spent a lot of that time honing my skills in programming languages like Python and Java. I specialize in full-stack development, which means I'm comfortable working with both front-end and back-end technologies. In my free time, I like to work on personal coding projects and contribute to open-source software development communities. I'm excited to be here and looking forward to discussing technology and programming with all of you.
</p>
					<h3>CEO</h3>
				</div>
				</div>
				<div class="mangiii">
				<img src="../images/lubrin.jpg">
				<div>
					<h3>Catherine Lubrin</h3><p>Hi, My  Full Name is Catherine Desunia Lubrin, from Laylay, Boac, Marinduque. I'm currently 20 years old and I'm born on September 10, 2002. I'm second year college studied at Marinduque State College, taking Information Technology My hobbies are singing and watching movies.<p>
					<h3>COO</h3>
				</div>
			</div>
		</div>
		
	</section>
	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/mago.jpg">
				<div>
					<h3>Jonabelle Mago</h3> <p>is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<h3>COO</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				</div>
				<div class="mangiii">
				<img src="../images/lingon.jpg">
				<div>
					<h3>Mary Angeline Lingon</h3> <p>Hi my name is Mary Angelie A. Lingon, 21 years old and I am from Caganhao Boac Marinduque. I'm currently a second year collage student at Marinduque State College, taking a course of Information Technology. The best way I describe my self is that I'm tall and skinny. My height is 5'5and my weight is about 40 kl. I have a short and curly hair which I get from my mother. While my skin is slightly brown which I inherited from my mother.</p>
					<h3>COO</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
			</div>
		</div>
		
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>Group!</h4>
		<p>BSIT 2B<br>PROJECT FOR IPT<br>WE ARE THE GROUP 3</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-linkedin"></i>
		</div>
		<p>Made By <i class="fa fa-heart-o"></i> John Lander Pascual, Catherine Lubrin, Angeline Lingon, Jonabelle Mago.</p>

	</section>

	<!------JavaScript for Toggle Menu------>

	<script>

		var navLinks = document.getElementById('navLinks');

		function showMenu() {
			navLinks.style.right = "0"
		}

		function hideMenu() {
			navLinks.style.right = "-200px"
		}

	</script>

</body>
</html>