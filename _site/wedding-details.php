<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<!--<link rel="preconnect" href="http://cdn.nicowatine.me/wegotengagedinparis">-->
	<title>Wedding Details | Nico &amp; Corinne Are Engaged!</title>
	<meta name="description" content="All info regarding the mass and reception can be found on this page." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>" />

</head>


<body id="wedding-details">

<div id="tour-deiffel-bg"><!--awesome photo here--></div>

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
					<a href="/wedding-details" class="active">Wedding Details</a>
				</li>
				<li id="proposal-story">
					<a href="/proposal-story">Proposal Story</a>
				</li>
			</ul>
		</div>
	</nav>
</header>


<div class="height-wrapper"><div class="push-down"></div></div>

<section class="page-header outer-container centered-text">
	<h1 class="title white text-shadow">Wedding Details</h1>

	<div id="thank-you" style="display: none;" class="modal fade" tabindex="-1" >
		<h1 class="title white text-shadow">Thank You!</h1>
	</div>

	<div class="row" id="tabs">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#ceremony" class="header normal">Ceremony</a>
			</li>
			<li>
				<a href="#reception" class="header normal">Reception</a>
			</li>
			<li>
				<a href="#rsvp" class="header normal">RSVP</a>
			</li>
			<li>
				<a href="#registry" class="header normal">Registry</a>
			</li>
		</ul>
	</div>
</section>

<main class="outer-container">
	<section class="content-container centered-text tab-content" id="main-wrapper">
		<article id="ceremony" class="tab-pane fade in active">
			<h2 class="header">The Ceremony</h2>
			<p class="large">The wedding ceremony will be held in the Chapel of Divine Mercy, located on the <span class="inline-block">St. Laurence Catholic Church</span> grounds.</p>
			<p class="large">St. Laurence is located at the corner of Austin Pkwy and <span class="inline-block">Sweetwater Blvd.</span> <br>The chapel is attached to the school bulding along <span class="inline-block">Austin Pkwy.</span></p>
			<p class="large">The ceremony will begin promptly at 5:30PM. <br>Attire is Black Tie Optional.</p>
			<br>
			<h3 class="header">Time &amp; Location</h3>
			<address class="tldr-box content-container" id="ceremony">
				<span class="time">5:30PM</span>
				The Chapel of Divine Mercy <br>
				<span class="tiny">located on the</span> <br>
				St. Laurence Catholic Church Grounds
				<hr>
				<a href="https://goo.gl/maps/sQA643F7VfK2" id="map-link" target="_blank">3100 Sweetwater Blvd <br>
				Sugar Land, Texas 77479</a> <br>
			</address>
		</article>
	</section>
</main>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/details-min.js'); ?>"></script>
<!--<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-55459011-7','auto');ga('send','pageview');
</script>-->

</body>
</html>