<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>The Proposal Story</title>
	<meta name="description" content="###">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php autoVer('/css/ie.css'); ?>"/>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body id="proposal-story">
<div id="skrollr-body">
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
					<a href="/wedding-details">Wedding Details</a>
				</li>
				<li id="proposal-story">
					<a href="/proposal-story" class="active">Proposal Story</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<section class="bgvid-container">
	<div id="intro">
		<h1 class="title white text-shadow">The Proposal</h1>
		<h2 class="header white text-shadow">In October of 2014, Nico and Corinne went to France for a family wedding.</h2>
		<h3 class="header white text-shadow">Little did Corinne know that Nico had a surprise planned…</h3>
		<img src="/img/proposal-story/assets/circular-arrow.png" alt="Down Arrow" class="down-arrow">
	</div>
	<video autoplay loop preload="auto" poster="/img/proposal-story/video/splash/poster.jpg" id="bgvid">
		<source src="/img/proposal-story/video/splash/eiffel-1.webm" type="video/webm">
		<source src="/img/proposal-story/video/splash/eiffel-1.mp4" type="video/mp4">
	</video>
</section>


<section id="parallax-ring" data-bottom-top="background-position:0px 100%;" data-top-bottom="background-position:0px 0px;">
	<div class="fade-out" data-center-top="background:rgba(0, 0, 0, 0);" data-bottom="background:rgba(0,0,0,1);"></div>
</section>


<section id="lock-bridge">
	<div class="map-header">
		<article>
			<h3 class="header">1st Proposal Opportunity</h3>
			<h2 class="title">The Lock Bridge</h2>
			<p class="large">Famous for the thousands of padlocks that lovers have attached to the bridge after signing their names on it and throwing the key into The Seine river below.
			<br><br>
			The bridge has so many locks on it that it cannot handle the weight, and attaching new padlocks is now forbidden.
			<br><br>
			Proposing here would have been way too predictable…</p>
		</article>
	</div>
</section>

<!-- <section id="lock-bridge-photos">
	<h3 class="header">Nico decided that since he wasn’t proposing here that they should instead just take a selfie</h3>
	<div class="photo-row double-photo">
		<img src="/img/proposal-story/lock-bridge/lock-bridge-selfie.jpg" alt="Nico &amp; Corinne Selfie on the Lock Bridge" id="first">
		<img src="/img/proposal-story/lock-bridge/corinne-posing.jpg" alt="Corinne Posing For A Photo On The Lock Bridge" id="second">
	</div>
	<div class="photo-row single-photo">
		<img src="/img/proposal-story/lock-bridge/lock-bridge-view.jpg" alt="Side View Of The Lock Bridge">
	</div>
</section> -->

	
		





</div><!-- /#skrollr-body -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>


</body>
</html>