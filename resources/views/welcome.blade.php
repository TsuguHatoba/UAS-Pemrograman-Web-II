<!doctype html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Crunchii Rory</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
		<nav>
			<a href="index.html"><img src="images/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="">HOME</a></li>
					<li><a href="">NOVEL</a></li>
					<li><a href="">GENRE</a></li>
					<li><a href="">POPULAR</a></li>
					<li><a href="">ABOUT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
	<div class="text-box">
		<h1>Test Jole Love Ambar Tapi Boong</h1>
		<p>deskripsi bagian 1 awu wu wu</p>
		<a href="" class="hero-btn">Bikin Novel</a>
	</div>
	</section>
<!------JavaScript for Toggle Menu----->
<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-145px";
	}
</script>

</body>
</html>
