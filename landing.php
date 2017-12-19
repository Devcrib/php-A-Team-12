<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body> 
		<div class="modal-3">
			<div class="pass">
				<div class="changepass">
				<form id="form2"  action="./scripts/users.php" method="post">
					
		<!--    this is the fist step -->
					<div class="step">
						<input type="email" name="change_email" class="name" value="<?php echo $_SESSION['user']; ?>" disabled ><br>
						<input type="password" name="change_password" class="name" placeholder="Your Password" required><br>
						
					</div>
					<button class="changep">CHANGE</button>
				</form>
			</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="pro-picture">
			
			</div>
			<div class="info">
				<h2>Profile Info</h2>
				<div class="information">
					
				</div>
				<button class="change">Change Password</button>
				<a href="./index.php"><button class="logout"> LOG OUT </button></a>
			</div>
		</div>
		<script src="jquery.min.js"></script>
		<script src="app.js"></script>
	</body>
</html>