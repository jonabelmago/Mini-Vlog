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
		<a href="" class="hero-btn">My Quote</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/pascual.png">
				<div>
					<h3>John Lander Pascual</h3> <p> "Information technology and business are becoming inextricably interwoven. I don't think anybody can talk meaningfully about one without the talking about the other."</p>
					<br>
					<p>"The great thing about information technology is that it empowers people to do what they want to do. It lets people be creative. It lets people be productive. It lets people learn things they didn't think they could learn before, and so in a sense, it is all about potential."</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
					<h3>CEO</h3>
				</div>
				</div>
				<div class="mangiii">
				<img src="../images/lubrin.jpg">
				<div>
					<h3>Catherine Lubrin</h3><p>“Who you are certified is alright.”<p>
					<br>
					<p>“People have a problem with me being different, but that actuate me forward in life.”</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
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
					<a href="" class="hero-btn red-btn">VISIT!</a>
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
					<h3>Angeline Lingon</h3> <p>“Stay away from those people who try to disparage your ambitions. Small minds will always do that, but great minds will give you a feeling that you can become great too.” </p>
					<br>
					<p>“If you are working on something that you really care about, you don’t have to be pushed. The vision pulls you.”</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
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