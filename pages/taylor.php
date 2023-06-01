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
		<a href="" class="hero-btn">Taylor Swift</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Taylor Swift</h1>
			<p>Taylor Swift is a Grammy Award-winning global pop superstar and singer-songwriter. Born on December 13, 1989 in Reading, Pennsylvania, she began her music career at the age of 14 when she moved to Nashville, Tennessee to pursue a career in country music. Swift's self-titled debut album was released in 2006, featuring hit singles "Teardrops on My Guitar" and "Our Song". 
			<br>
			Throughout her career, Swift has released nine studio albums, including Fearless, Speak Now, Red, 1989, Reputation, Lover, Folklore, Evermore, and Fearless (Taylor's Version). She is known for her confessional songwriting style, which often highlights personal experiences and relationships, and her signature crossover sound that blends country, pop, and electro-pop elements. 
			<br>
			In addition to her music, Swift has also ventured into acting, with roles in films such as Valentine's Day and The Giver. She is also known for her philanthropy and activism, having donated millions of dollars to various charities and causes, and advocating for LGBTQ+ rights, feminism, and mental health awareness.</p>
			<h1>Musics:</h1>
			<h1>Some of the most popular Taylor Swift songs include:<h1>
			<p>
			1. Love Story
			<br>2. You Belong with Me
			<br>3. Shake It Off
			<br>4. Blank Space
			<br>5. I Knew You Were Trouble
			<br>6. We Are Never Ever Getting Back Together
			<br>7. Wildest Dreams
			<br>8. Bad Blood
			<br>9. Delicate
			<br>10. Style
			<br>11. Look What You Made Me Do
			<br>12. End Game
			<br>13. 22
			<br>14. Red
			<br>15. ME! (feat. Brendon Urie)</p>
			<h1>Status:</h1>
			<p>Married with: Joe Alwyn</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/Swift.png">
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