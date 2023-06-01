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
		<a href="" class="hero-btn">Shawn Mendes</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Shawn Mendes</h1>
			<p>Shawn Mendes is a Canadian singer-songwriter and musician. He was born on August 8, 1998, in Pickering, Ontario, Canada. Mendes rose to fame in 2013 after posting covers of popular songs on the video-sharing app Vine. In 2014, he signed with Island Records and released his debut single "Life of the Party," which peaked at number 24 on the Billboard Hot 100 chart. Since then, Mendes has released several successful albums, including "Illuminate" and "Shawn Mendes," and has won numerous awards for his music. He is known for his heartfelt lyrics, soulful voice, and acoustic guitar playing, and has sold over 75 million records worldwide.</p>
			<h1>Musics:</h1>
			<h1>Some of the most popular Shawn Mendes songs include:<h1>
			<p>
			1. Stitches
			<br>2. Mercy
			<br>3. Treat You Better
			<br>4. There's Nothing Holdin' Me Back
			<br>5. In My Blood
			<br>6. Lost In Japan
			<br>7. Señorita 
			<br>8. If I Can't Have You
			<br>9. Youth
			<br>10. Wonder 
			<br>11. Fallin' All in You
			<br>12. Life of the Party
			<br>13. Where Were You in the Morning?
			<br>14. If I Ain't Got You (Alicia Keys cover)
			<br>15. A Little Too Much.</p>
			<h1>Status:</h1>
			<p>Dating with: Sabrina Carpenter</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/Mendes.png">
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