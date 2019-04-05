<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<meta charset="utf-8">
			<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
			<link rel="stylesheet" href="contactstyle.css">
			<link rel="stylesheet" href="style.css">
			<title>Contact Me</title>
		</head>
	<body>
		<header>
			<div class="container">
				<nav>
					<h1 class="brand"><a href="index.html">Kobe <span>Rachels</span></a></h1>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
<div class="contact" >
		<h1>Contact Me</h1>
		<p>E-mail Me</p>
		<form class="contact-form" action="contactform.php" method="post">
			<input type="text" name="name" placeholder="Full name">
			<input type="email" name="email" placeholder="Your E-mail">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="message" placeholder="Message"></textarea>
			<button type="submit" name="submit">Send E-Mail</button>
	</body>
</html>
