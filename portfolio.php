<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<meta name="description" content=""/>
	<title>shaine.com · Portfolio</title>

	<!-- Custom Stylesheets and Scripts -->
	<link rel="stylesheet" href="CSS\mainCss.css">
	<link rel="stylesheet" href="CSS\portfolioCss.css">
	<script defer type="text/javascript" src="JS\mainJS.js" ></script>

	<!-- Bootstrap CDN links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"> </script>
</head>

<body>
	<?php 
		include("Others/navbar.php");
	?>
	<!-- Custom toggler button -->
	<div class="container-fluid">
		<div class="container">
			<div class="row justify-content-center align-items-center text-center py-5 vstack">
				<div class="col-md-12 lh-1 pageTitle">
					<p>Check out my <span class="textColored">work</span>!</p>
				</div>
				<div class="col-md-7 lh-1.5 pageContent">
					<p>Take a look at my recent projects. For a full preview of my best works, you can download my portfolio below.</p>
				</div>
				<div class="col-md-4 my-2 customButton">
					<a href="https://drive.google.com/file/d/1Lk3HBr_Xc0a18famgU2jyqcqUsKwVkLa/view?usp=share_link" download="Portfolio.pdf" target="_blank"> <button class="btn outline-0 shadow border-0 rounded-1 lh-1 px-3 py-2" type="button"> DOWNLOAD PORTFOLIO </button> </a>
				</div>
			</div>
		</div>
	</div>
	<!-- First Row -->
	<div class="container-fluid customBG1">
		<div class="container py-3">
			<div class="row row-cols-lg-3 gap-3 my-3 justify-content-center align-items-center">
				<!-- Text -->
				<div class="col-lg-4 my-2">
					<p class="title1 lh-1 mb-2">CSIT Days 2023</p>
					<div class="subtitle1Box subtitle1 rounded-1"><p> April 2023 </p></div>
					<p class="content1 lh-1.5 ">
						The second time I created a layout for this annual event partnered by the Computer Science and Information Technology Department.<br><br>The theme for this year is Arcade. The whole department were divided into four teams, and will face together on every competition. Team that has the most points win.
					</p>
				</div>
				<!-- Image Carousel -->
				<div class="col-lg-7 my-2">
					<div class="d-flex flex-row flex-nowrap overflow-auto py-1">
				        <div class="ratio ratio-1x1 cardScroll"><img src="Images/MainPoster_CSIT2023.png" alt="img1"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/ESPORTS_1ST.png" alt="img2"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/Program_CSIT2023-1.png" alt="img3"></div>     
					</div>
				</div>			
			</div>
		</div>	
	</div>
	<!-- Second Row -->
	<div class="container-fluid customBG2">
		<div class="container py-3">
			<div class="row row-cols-lg-3 gap-3 my-3 justify-content-center align-items-center">
				<!-- Text -->
				<div class="col-lg-4 order-lg-2 my-2">
					<p class="title2 lh-1 mb-2">Sir Kit's ITems</p>
					<div class="subtitle1Box subtitle2 rounded-1"><p> February 2023 </p></div>
					<p class="content2 lh-1.5 ">
						Weeks after the Merch Design Contest is Sir Kit's ITems, an income generating project of BUCS-CircUITS. The winning design from the contest were used as the organization's official merchandise for the academic year 2022-2023.<br><br> This is the time where I did some experiments and explored new styles that could be useful for my next projects.
					</p>
				</div>
				<!-- Image Carousel -->
				<div class="col-lg-7 order-lg-1 my-2">
					<div class="d-flex flex-row flex-nowrap overflow-auto py-1">
				        <div class="ratio ratio-1x1 cardScroll"><img src="Images/MainPosterMerch-2.png" alt="img1"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/PS-1.png" alt="img2"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/PS-4.png" alt="img3"></div>
					</div>
				</div>			
			</div>
		</div>	
	</div>
	<!-- Third Row -->
	<div class="container-fluid customBG1">
		<div class="container py-3">
			<div class="row row-cols-lg-3 gap-3 my-3 justify-content-center align-items-center">
				<!-- Text -->
				<div class="col-lg-4 my-2">
					<p class="title1 lh-1 mb-2">Merch Design Contest</p>
					<div class="subtitle1Box subtitle1 rounded-1"><p> January 2023 </p></div>
					<p class="content1 lh-1.5 ">
						A contest for the students within the department where they can showcase their creative skills. I used a gradient-like background and a simple title for the layout to highlight each entry.
					</p>
				</div>
				<!-- Image Carousel -->
				<div class="col-lg-7 my-2">
					<div class="d-flex flex-row flex-nowrap overflow-auto py-1">
				        <div class="ratio ratio-1x1 cardScroll"><img src="Images/MerchDesignMain-2.png" alt="img1"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/LY_03.png" alt="img2"></div>
						<div class="ratio ratio-1x1 cardScroll"><img src="Images/WINNERS_MerchDesign2223.png" alt="img3"></div>     
					</div>
				</div>			
			</div>
		</div>	
	</div>
	<!-- Fourth Row -->
	<div class="container-fluid customBG2">
		<div class="container py-3">
			<div class="row row-cols-lg-3 gap-3 my-3 justify-content-center align-items-center vstack">
				<div class="col-lg-7 text-center">
					<p class="title2 lh-1 mb-2">Other layouts</p>
				</div>
				<!-- Image Carousel -->
				<div class="col-lg-12">
					<div class="d-flex flex-row flex-nowrap overflow-auto py-1">
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/JOB FAIR 2022_denso.jpg" alt="img"></div>
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/CSIT-WEEK_MAIN.jpg" alt="img"></div>
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/JCR_Main.png" alt="img"></div>
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/SciTech-Symposium_Speaker-BSIT.png" alt="img"></div> 
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/ELECTIONS.jpg" alt="img"></div>
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/Sir-Noel.jpg" alt="img"></div>
						<div class="ratio ratio-1x1 cardScroll2"><img src="Images/TRAINING_MAIN PUB.jpg" alt="img"></div>
					</div>
				</div>			
			</div>
		</div>	
	</div>



</body>
</html>