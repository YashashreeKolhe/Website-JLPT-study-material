<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>JLPT Exam Material</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link type = "text/css" rel = "stylesheet" href = "style.css">
		<script src = 'main.js' type = 'text/javascript'></script>
	</head>	
	<body>
		<header>
			<div class = 'login-header'>
					<img src = "nihongo-manabu.png" id = 'icon'/>
					<h1>Nihongo Manabu</h1>
				<form class = 'test' action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
					Email:<input type = "text" name = "email" id = 'email' class = 'text' placeholder = "you@example.com" value = "<?php echo $email;?>">
					Password:<input type = "password" name = "password" id = 'password' class = 'text'>
					<br/>
					<button name = "register" class = 'btn'>Register</button>
					<input type = "submit" name = "submit" value = "Sign In" class = 'btn'>
				</form>
			</div>
		</header>
		<section>
			<img src = "mt-fuji.jpg" id = 'mt-fuji'/>
			<ul class = 'navbar'>
				<li class = 'navbar-element'><a href = "home.html">Home</a></li>
				<li class = 'navbar-element' >Levels</li>
				<li class = 'navbar-element' >Culture</li>
				<li class = 'navbar-element'>About</li>
				<li class = 'navbar-element'>Help</li>
			</ul>
			<div class = 'remaining'>
				<img src = "sakura.jpg" id = 'hiragana'/>
				<?php
					$email = $password = "";
					echo "<h2>Your Input!</h2>";
					if(!empty($_POST["email"])) {
						$email = $_POST["email"];
						echo $email;
					}
					if(!empty($_POST["password"])) {
						$password = $_POST["password"];
						echo $password;
					}
					if(isset($_POST["register"])) {
						header("Location:register.html");
					}
				?>
			</div>
		</section>
		<footer>
		</footer>
	</body>
</html>
