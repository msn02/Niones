<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta name="description" content=""/>
	<title>shaine.com · About Me</title>

	<!-- Custom Stylesheets and Scripts -->
	<link rel="stylesheet" href="CSS\mainCss.css">
	<link rel="stylesheet" href="CSS\aboutMeCss.css">
	<script defer type="text/javascript" src="JS\mainJS.js" ></script>

	<!-- Bootstrap CDN links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
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
					<p>Meet the <span class="textColored">creator</span>!</p>
				</div>
				<div class="col-md-7 lh-1.5 px-3 pageContent">
					<p> Hi! My name is <b>Misty Shaine</b>, a second year student from Bicol University. Currently taking Bachelor of Science in Information Technology, and aspires to be a UI/UX Designer.</p>
				</div>
				<div class="col-md-4 my-2 customButton">
					<a href="portfolio.html"> <button class="btn outline-0 shadow border-0 rounded-1 lh-1 px-3 py-2" type="button"> SEE PORTFOLIO </button> </a>
				</div>
			</div>
		</div>
	</div>
	<!-- Bottom content -->
	<div class="container-fluid customBG1">
		<div class="container py-1">
			<div class="row row-cols-lg-3 my-5 justify-content-center align-items-center text-center">
				<!-- Left content -->
				<div class="col-lg-4 my-1">
					<p class="title1 lh-1">Why <span class="textColored">UI/UX Design</span>?</p>
					<p class="content1 lh-1.5 ">
						It was in high school where I wanted to be a programmer. As I entered college in my freshman year, I discovered something I am good at, which is graphic designing. I thought <i>"Why not I become a programmer and a designer at the same time?"</i> <br><br>
					</p>
				</div>
				<!-- Image at the center -->
				<div class="col-lg-4 mb-3">
					<div class="ratio ratio-1x1">
						<img src="Images/img1.png">
					</div>
				</div>
				<!-- Right content -->
				<div class="col-lg-4 my-1">
					<p class="title1 lh-1"> From nothing, to <span class="textColored">passion</span><p>
					<p class="content1 lh-1.5 ">
						I learned the basics of Photoshop and editing during my high school years. Graphic design started as just a requirement to complete my academic projects. When I joined a student organization in my department, graphic design became a huge part in my college life.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>