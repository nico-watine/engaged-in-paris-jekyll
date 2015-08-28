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

<div
	class="parallax-image-wrapper parallax-image-wrapper-100"
	data-anchor-target="#ring + .gap"
	data-bottom-top="transform:translate3d(0px, 200%, 0px)"
	data-top-bottom="transform:translate3d(0px, 0%, 0px)">

	<div
		class="parallax-image parallax-image-100"
		style="background-image:url(/img/proposal-story/ring/ring-parallax.jpg)"
		data-anchor-target="#ring + .gap"
		data-bottom-top="transform: translate3d(0px, -80%, 0px);"
		data-top-bottom="transform: translate3d(0px, 80%, 0px);"
	></div>
</div>

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

<div class="bgvid-container">
	<video autoplay loop preload="auto" poster="/img/proposal-story/video/splash/poster.jpg" id="bgvid">
		<source src="/img/proposal-story/video/splash/eiffel-1.webm" type="video/webm">
		<source src="/img/proposal-story/video/splash/eiffel-1.mp4" type="video/mp4">
	</video>
</div>

<main>
	<section id="intro">
		<h1 class="title white text-shadow">The Proposal</h1>
		<h2 class="header white text-shadow">In October of 2014, Nico and Corinne went to France for a family wedding.</h2>
		<h3 class="header white text-shadow">Little did Corinne know that Nico had a surprise planned…</h3>
		<!-- <img src="/img/proposal-story/assets/circular-arrow.png" alt="Down Arrow" class="down-arrow"> -->
	</section>

	<div class="content content-full" id="ring">
		Here be kittens
	</div>

	<div class="gap gap-100" style="background-image:url(/img/proposal-story/ring/ring-parallax.jpg);"></div>
</main>
</div>



<script src="/assets/bower_components/skrollr/dist/skrollr.min.js"></script>
<script type="text/javascript">
	skrollr.init({
		smoothScrolling: false,
		mobileDeceleration: 0.004
	});
</script>
</body>
</html>