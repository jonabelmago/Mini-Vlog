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
		<a href="" class="hero-btn">Kathyrn Bernardo</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Kathyrn Bernardo</h1>
			<p>Kathryn Bernardo is a bilingual (Filipino and English) Filipino actress, host, and recording artist. She was born on March 26, 1996, in Cabanatuan City, Nueva Ecija, Philippines. 

			Bernardo began her career as a child actress, but rose to fame after being cast as Mara in the TV series "Mara Clara". She went on to star in several other TV dramas such as "Princess and I", "Got to Believe" and "Pangako Sa 'Yo".

			Bernardo has also starred in many popular Filipino movies such as "Barcelona: A Love Untold", "Can't Help Falling In Love", "Hello, Love, Goodbye", and "The Hows of Us". She has won several awards and nominations for her performances in both television and movies.

			Aside from acting, Bernardo is also a successful recording artist, having released multiple albums and singles in the Philippines. She has also been recognized for her philanthropy, having supported various organizations such as the Gloria Macapagal Arroyo Foundation, Philippine Red Cross, and UNICEF.

			Bernardo is also involved in a long-term relationship with her onscreen partner and fellow Filipino actor, Daniel Padilla.</p>
			<h1>Movies:</h1>
			<h1>Here are some popular movies of Kathryn Bernardo:</h1>
			<p>
			<br>1. The Hows of Us (2018)
			<br>2. Hello, Love, Goodbye (2019)
			<br>3. Barcelona: A Love Untold (2016)
			<br>4. Can’t Help Falling in Love (2017)
			<br>5. Sisterakas (2012)
			<br>6. Crazy Beautiful You (2015)
			<br>7. Must Be... Love (2013)
			<br>8. Way Back Home (2011)
			<br>9. You Are the One (2006)
			<br>10. She's Dating the Gangster (2014)</p>
			<h1>Status:</h1>
			<p>In a Relationship</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/bernardo.png">
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