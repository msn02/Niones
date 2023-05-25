<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta name="description" content=""/>
	<title>shaine.com · Contact Me</title>

	<!-- Custom Stylesheets and Scripts -->
	<link rel="stylesheet" href="CSS\mainCss.css">
	<link rel="stylesheet" href="CSS\contactMeCss.css">
	<script defer type="text/javascript" src="JS\mainJS.js" ></script>

	<!-- Bootstrap CDN links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"> </script>
</head>

<body>
	<?php 
		include("Others/navbar.php");
	?>
	<!-- Title and content -->
	<div class="container-fluid">
		<div class="container">
			<div class="row justify-content-center align-items-center text-center py-5 vstack">
				<div class="col-md-12 lh-1 pageTitle">
					<p>Connect with <span class="textColored">me</span>!</p>
				</div>
				<div class="col-md-7 lh-1.5 pageContent">
					<p>For comments, suggestions, or inquiries, fill out the form below.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid customBG1">
		<div class="container py-3">
			<div class="row my-4 gap-2 justify-content-center align-items-center vstack">
				<!-- Contact Form -->
				<div class="col-lg-5 py-4 my-2 container1 rounded-3">
					<div class="title1 lh-1 mt-3 text-center">
						<p>Send us a <span class="textColored">message</span></p>
					</div>
					<div class="row px-2 justify-content-center align-items-center vstack">
						<form class="px-3" method="" action="">
							<!-- User name -->
							<div class="inputBox mb-2">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" required>
							</div>
							<!-- User e-mail -->
							<div class="inputBox mb-2">
								<label for="email">Email</label>
								<input class="form-control" type="email" name="email" required>
							</div>
							<!-- Message of user -->
							<div class="inputBox mb-2">
								<label for="message">Message</label>
								<textarea class="form-control textBox" type="text" name="message" rows="3" required></textarea>
							</div>
							<!-- Submit Button -->
							<div class="my-2 customButton text-center">
								<button class="btn outline-0 shadow border-0 rounded-1 lh-1 px-3 py-2 mt-2" type="submit">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>
				<!-- Social Media Links -->
				<div class="col-lg-3 mt-3 gap-2">
					<div class="container2 rounded-1">
						<p class="lh-1 mb-0"> FOLLOW MY SOCIALS </p>
					</div>
				</div>
				<div class="col-lg-5 rounded-1 text-center">
					<span class="buttonLinks">
						<!-- Facebook -->
						<a href="https://www.facebook.com/sheyn.msn02" target="_blank"><button class="btn border-0" type="button"><i class="bi bi-facebook customIcons1"></i></button></a>
						<!-- GitHub -->
						<a href="https://github.com/msn02" target="_blank"><button class="btn border-0" type="button"><i class="bi bi-github customIcons1"></i></button></a>
						<!-- LinkedIn -->
						<a href="https://www.linkedin.com/in/msniones02/" target="_blank"><button class="btn border-0" type="button"><i class="bi bi-linkedin customIcons1"></i></i></button></a>
					</span>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>