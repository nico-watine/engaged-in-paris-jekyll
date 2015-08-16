<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Nico &amp; Corinne Watine are Engaged!</title>
	<meta name="description" content="###">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php autoVer('/css/ie.css'); ?>"/>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body id="wedding-details">

<header>
	<nav class="outer-container">
		<div class="row">
			<div id="crest-wrapper">
				<a href="/">
					<img src="/img/badge/nav-badge.png" alt="Mini Crest">
				</a>
			</div>
			<ul>
				<li id="wedding-details">
					<a href="/wedding-details/" class="active">Wedding Details</a>
				</li>
				<li id="rsvp">
					<a href="#">RSVP</a>
				</li>
				<li id="proposal-story">
					<a href="#">Proposal Story</a>
				</li>
			</ul>
		</div>
	</nav>
</header>


<div class="height-wrapper"><div class="push-down"></div></div>


<section class="page-header outer-container centered-text">
	<h1 class="bold white text-shadow">Wedding Details</h1>
	<div class="row" id="tabs">
		<div class="tab-container" id="ceremony">
			<a href="#" class="normal tab-button white text-shadow">Ceremony</a>
		</div>
		<div class="tab-container" id="reception">
			<a href="#" class="normal tab-button white text-shadow">Reception</a>
		</div>
	</div>
</section>

<main class="outer-container">
	<section class="content-container centered-text" id="main-wrapper">
		<h2 class="normal container-title">Ceremony Location</h2>

		<address class="content-container" id="location-box">
			<h3>The Chapel of Divine Mercy <br>
			<span>located on the</span> <br>
			St. Laurence Catholic Church Grounds <br>
			3100 Sweetwater Blvd <br>
			Sugar Land, Texas 77479</h3>
		</address>

		<p class="large">The wedding ceremony will be held in the Chapel of Divine Mercy, located on the St Laurence Catholic Church grounds. The Chapel is attached to the school building, and not in the actual church.</p>

		<div class="row">
			<div class="map-container">
				<img src="/img/wedding-details/chapel-map@2x.png" alt="Chapel Map">
			</div>

			<div class="map-container">
				<img src="/img/wedding-details/chapel-street@2x.png" alt="Chapel Street View">
			</div>
		</div>
		
		<p class="large">The Chapel attached to the School Building is along Austing Parkway. <br>The ceremony is held in this building.</p>

		<hr>

		<p class="large">The main Church building is located at the corner of Austing Pkwy and Sweetwater Blvd. <br>The wedding ceremony is not in this building.</p>

		<div class="row">
			<div class="map-container">
				<img src="/img/wedding-details/church-map@2x.png" alt="Church Map">
			</div>

			<div class="map-container">
				<img src="/img/wedding-details/church-street@2x.png" alt="Church Street View">
			</div>
		</div>

	</section>
</main>

<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>
</body>
</html>