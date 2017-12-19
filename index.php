<?php
session_start();
?>
	<html>
	  <head>
		<link rel="stylesheet" href="style.css">
	  </head>
		<body>
			<div class="modal">
						<span class="times">&times;</span>
							<div class="modal-content">
								<button class="signup-art">SIGN UP</button>
								<button class="signup-temp">LOG IN</button>
								<div class="form1">
									<?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?>
									<form id="form" autocomplete="off" action="./scripts/users.php" method="post">
									   
		<!--    this is the fist step -->
										<div class="step">
											<input type="text" name="name" class="name" placeholder="Your Name" required><br>
											<input type="email" name="email" class="name" placeholder="Your Email" required><br>
											<input type="text" name="address" class="name" placeholder="Your Address" required>
		
											<input type="password" name="password" class="name" placeholder="Choose Password" required><br>
										</div>
		<!--                                this is the third step-->
										
		<!--                                end of steps-->
										<button class="signup">SIGN UP</button>
									</form>
								</div>
								<div class="form2">
									<form id="form2"  action="./scripts/users.php" method="post">
									   
		<!--    this is the fist step -->
										<div class="step">
											<input type="email" name="login_email" class="name" placeholder="Your Email" required><br>
											<input type="password" name="login_password" class="name" placeholder="Your Password" required><br>
											
										</div>
		<!--                                this is the second step-->
		<!--                                this is the third step-->
										
		<!--                                end of steps-->
										<button class="login">LOG IN</button>
									</form>
								</div>
							</div>
						
					</div>
				
				</div>
				<script src="jquery.min.js"></script>
				<script src="app.js"></script>
			</body>
			</html>
<?php
session_destroy();
?>			