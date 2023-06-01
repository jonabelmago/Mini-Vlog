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
		<a href="" class="hero-btn">Daniel Padilla</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Daniel Padilla</h1>
			<p>Daniel Padilla is a popular Filipino actor, singer, and model. He was born on April 26, 1995, in Manila, Philippines, and is the son of actors Karla Estrada and Rommel Padilla.

			Padilla first gained fame for his role as Patrick in the teen drama series "Growing Up" in 2011. He then starred in several films and TV shows, most notably "Princess and I", "Got to Believe", "Can’t Help Falling in Love", and "The Hows of Us".

			Aside from acting, Padilla is also known for his music career. He has released several albums and singles, including "I Heart You" and "Kasama Kang Tumanda". He also holds concerts and music tours across the Philippines, and has won numerous awards for his music and acting.

			As for his personal life, Padilla has been in a relationship with Filipina actress Kathryn Bernardo since 2013. They are often referred to as a love team in Philippine showbiz and have starred in various films and TV shows together.</p>
			<h1>Movies:</h1>
			<h1>Here are some popular movies of Daniel Padilla:</h1>+
			<p>
			<br>1. Crazy Beautiful You (2015)
			<br>2. She's Dating the Gangster (2014)
			<br>3. Can't Help Falling in Love (2017)
			<br>4. Barcelona: A Love Untold (2016)
			<br>5. Four Sisters and a Wedding (2013)
			<br>6. The Hows of Us (2018)
			<br>7. Got to Believe: The Movie (2013)
			<br>8. Sisterakas (2012)
			<br>9. Pagpag: Siyam na Buhay (2013)
			<br>10. The Revenger Squad (2017)</p>
			<h1>Status:</h1>
			<p>In a Relationship</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/padilla.png">
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