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
					<li><a href="../pages/following.php">Following</a> </li>
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
		<a href="" class="hero-btn">Following</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/pascual.png">
				<div>
					<h3>John Lander Pascual<p>(Following)</p><h3><p>is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				</div>
				<div class="mangiii">
				<img src="../images/lubrin.jpg">
				<div>
					<h3>Catherine Lubrin<p>(Following)</p></h3><p>is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
			</div>
		</div>
		
	</section>
	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/mago.jpg">
				<div>
					<h3>Jonabelle Mago<p>(Following)</p></h3><p>is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
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
					<h3>Angeline Lingon<p>(Following)</p></h3><p>is an Filipino business magnate, investor, and philanthropist. He is best known for co-founding software giant Microsoft, along with his late childhood friend William Henry Gates III.</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
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