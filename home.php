<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MiniVlog</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
	<section class="header">
		<nav>
			<a href="home.php"><img src="images/minilogo.png"> </a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="">Home</a> </li>
					<li><a href="pages/profile.php">Profile</a> </li>
					<li><a href="pages/groupmember.php">Group Members</a> </li>
					<li><a href="pages/following.php">following</a> </li>
					<li><a href="pages/saved.php">saved</a> </li>
					<li><a href="pages/aboutipt.php">About IPT</a> </li>
					<li><a href="pages/about.php">About Us</a> </li>
					<li><a href="pages/contacts.php">Contacs</a> </li>
					<li><a href="pages/myquote.php">My Quote</a> </li>
					<li><a href="pages/termsandcondition.php">Terms and Condition</a> </li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
			<div class="text-box">
				<h1>Mini Vlog</h1>
				<p>A blog, short for weblog, is a frequently updated web page used for personal commentary or business content.<br>Blogs are often interactive and include sections at the bottom of individual blog posts where readers can leave comments.</p>
				<a href="" class="hero-btn">Visit Us To Know More</a>
			</div>
	</section>
	<!------Home------>

	<section class="Home">
		<h1>Posted vlogs</h1>
		<p>Tell them about challenges you're dealing with, make a Q&A video, share your attitude to sport, food, life in general, or anything else. Don't forget to communicate with your viewers – just ask for their opinions on the topics that you cover in your videos.</p>
		<div class="row">
			<div class="vlogs">
				<h3>John Lander Pascual</h3>
				<p>I'm here to express myself that what I see, what I experience and what I plan for my life. I try myself to be modest, passionate, devoted, hardworking and honest.</p>
			</div>
			<div class="vlogs">
				<h3>Selena Gomez</h3>
				<p>Selena Marie Gomez is an American singer, actress, producer, and businesswoman. Gomez began her acting career on the children's television series Barney & Friends. As a teenager, she rose to prominence for starring as Alex Russo on the Disney Channel television series Wizards of Waverly Place.</p>
			</div>
			<div class="vlogs">
				<h3>Ed Sheeran</h3>
				<p>Edward Christopher Sheeran MBE is an English singer-songwriter. Born in Halifax, West Yorkshire, and raised in Framlingham, Suffolk, he began writing songs around the age of eleven. In early 2011, Sheeran independently released the extended play No. 5 Collaborations Project.</p>
			</div>
		</div>
	</section>

	<!------ Campuses ------>

	<section class="Campuses">
		<h1>Suggested Vlogs</h1>
		<p>Tell them about challenges you're dealing with, make a Q&A video, share your attitude to sport, food, life in general, or anything else. Don't forget to communicate with your viewers – just ask for their opinions on the topics that you cover in your videos.</p>
		<div class="row">
			<div class="lander">
				<img src="images/justins.png">
				<a href="pages/justin.php"><div class="layer">
					<h3>Justin Bieber</h3>
				</div></a>
			</div>
			<div class="lander">
				<img src="images/mendes.png">
				<a href="pages/mendes.php"><div class="layer">
					<h3>Shawn Mendes</h3>
				</div></a>
			</div>
			<div class="lander">
				<img src="images/swift.png">
				<a href="pages/taylor.php"><div class="layer">
					<h3>Taylor Swift</h3>
				</div></a>
			</div>
		</div>
				<div class="row">
			<div class="lander">
				<img src="images/martin.png">
				<a href="pages/martin.php"><div class="layer">
					<h3>Coco Martin</h3>
				</div></a>
			</div>
			<div class="lander">
				<img src="images/padilla.png">
				<a href="pages/padilla.php"><div class="layer">
					<h3>Daniel Padilla</h3>
				</div></a>
			</div>
			<div class="lander">
				<img src="images/bernardo.png">
				<a href="pages/bernardo.php"><div class="layer">
					<h3>Kathryn Bernardo</h3>
				</div></a>
			</div>
		</div>
	</section>

	<!------Description------>

	<section class="pascual">

		<h1>Vloggers Info</h1>
		<p>Tell them about challenges you're dealing with, make a Q&A video, share your attitude to sport, food, life in general, or anything else. Don't forget to communicate with your viewers – just ask for their opinions on the topics that you cover in your videos.</p>
		
	<div class="row">
		
		<div class="bastapascual">
			<img src="images/pascual.png">
			<h3>John Lander Pascual</h3>
			<p>I'm here to express myself that what I see, what I experience and what I plan for my life. I try myself to be modest, passionate, devoted, hardworking and honest.</p>
		</div>
		<div class="bastapascual">
			<img src="images/ed.png">
			<h3>Ed Sheeran</h3>
			<p>Edward Christopher Sheeran MBE is an English singer-songwriter. Born in Halifax, West Yorkshire, and raised in Framlingham, Suffolk, he began writing songs around the age of eleven. In early 2011, Sheeran independently released the extended play No. 5 Collaborations Project.</p>
		</div>
		<div class="bastapascual">
			<img src="images/selena.png">
			<h3>Selena Gomez</h3>
			<p>Selena Marie Gomez is an American singer, actress, producer, and businesswoman. Gomez began her acting career on the children's television series Barney & Friends. As a teenager, she rose to prominence for starring as Alex Russo on the Disney Channel television series Wizards of Waverly Place.</p>
		</div>

	</div>

	</section>

	<!------Website info------>

	<section class="mangi">
		
		<h1>Website Info</h1>
		<p>A blog (a truncation of "weblog") is an informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order so that the most recent post appears first, at the top of the web page.</p>

		<div class="row">
			<div class="mangiii">
				<img src="images/pascual.png">
				<div>
					<p>John Lander Pascual is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<h3>CEO</h3>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				</div>
				<div class="mangiii">
				<img src="images/bill.png">
				<div>
					<p>William Henry Gates III was an American business magnate, computer programmer, researcher, investor, and philanthropist. He is best known for co-founding Microsoft Corporation with his childhood friend John Lander Pascual in 1975, which helped spark the microcomputer revolution of the 1970s and 1980s.</p>
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

	<!------contacs------>

	<section class="contacs">
		<h1>Call at our team for more info and if you want to set an appointment<br>Anywhere from the world.</h1>
		<a href="" class="hero-btn">CONTACTS US</a>
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
<?php }else {
	header("Location: login.php");
	exit;
} ?>
