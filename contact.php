<!doctype html>

<html lang="en">
	<head>
		<meta charset ="UTF-8">

		<title>Contact | Pal Makkar</title>
		<meta name ="description" content ="Contact Me | Pal Makkar">
		<meta name ="author" content ="Pal Makkar">

		<link href="https://unpkg.com/basscss@8.0.1/css/basscss.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/stylesheets/custom.css">

	</head>

	<body>
		<div class='navbar'>
			<ul id="homebar" class="navigation-bar">
				<li id="logo">
					<a href="./index">
						<img src="public/images/logo.png" alt="logo" style="width:304px;height:50px;">
					</a>
				</li>
				<li class='nav-link'><a href="./contact">Contact</a></li>
				<li class='nav-link'><a href="./about">About</a></li>
			</ul>
		</div>

		<div id='content'>
			<h1>CONTACT ME</h1>
			<div id='contact-nodes'>
				<ul style="list-style-type:none" class="center">
					<li class="h2" style="margin-bottom:10px"> <div class="bold">Email: </div>pmakkar@berkeley.edu</li>
					<li class="h2"><div class="bold">Visit my Github: </div>pmakkar</li>
				</ul>
			</div>
		</div>

		<h2 class="bold">Leave me a message!</h2>
		<form action='/palmakkar/save_message.php' method='post'>
		  Email:<br>
		  <input type="text" name="email"><br>
		  Message:<br>
		  <input type="text" name="message"><br><br>
		  <input type="submit" value="Submit">
		</form>

		

	</body>
</html>

