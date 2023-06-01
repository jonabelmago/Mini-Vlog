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
		<a href="" class="hero-btn">Coco Martin</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Coco Martin</h1>
			<p>Coco Martin is a famous Filipino actor, director, and producer. He was born on November 1, 1981, in Novaliches, Quezon City, Philippines. He is best known for his prolific acting career in Philippine television and films.

			Martin began his career in showbiz in the early 2000s, playing supporting roles in various TV series and movies. However, his breakthrough role came in 2008 when he portrayed the lead character in the Philippine indie film, Masahista, which earned him numerous awards and accolades.

			Since then, Martin has become one of the most recognizable faces in Philippine entertainment industry, appearing in numerous hit TV shows and films, most notably in the series "Tayong Dalawa", "Walang Hanggan", and "Ang Probinsyano", which has been on air since 2015. 

			Martin has also ventured into directing and producing, creating films like “Pagpag: Siyam na Buhay” and “Ang Panday”. He is also known for his philanthropic efforts, having been involved in charity work through his foundation, Coco Martin Foundation, aimed at assisting and developing underprivileged communities in the Philippines.</p>
			<h1>Movies:</h1>
			<h1>Here are some popular movies of Coco Martin:</h1>
			<p>
			1. Ang Panday (2017)
			<br>2. Padre de Familia (2016)
			<br>3. Beauty and the Bestie (2015)
			<br>4. You're Still the One (2015)
			<br>5. Feng Shui 2 (2014)
			<br>6. A Moment in Time (2013)
			<br>7. Born to Love You (2012)
			<br>8. Sa 'yo Lamang (2010)
			<br>9. Nagsimula Sa Puso (2009)
			<br>10. Jay (2008)</p>
			<h1>Status:</h1>
			<p>single</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/martin.png">
			</div>
			
		</div>
		
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>About Us</h4>
		<p>A vlog, also known as a video blog or video log, is a form of blog for which the medium is video.<br>Vlog entries often combine embedded video with supporting text, images, and other metadata.<br>Entries can be recorded in one take or cut into multiple parts. Vlog category is popular on the video-sharing platform YouTube.</p>
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