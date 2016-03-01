<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<!--<link rel="preconnect" href="http://cdn.wegotengagedin.paris/wegotengagedinparis">-->
	<title>Wedding Album | Nico &amp; Corinne Are Engaged!</title>
	<meta name="description" content="The wedding album, with everyone's photos &amp; videos" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>" />

</head>

<body id="wedding-album">

<header>
	<nav>
		<div class="outer-container">
			<div class="row">
				<div id="crest-wrapper">
					<a href="/">
						<img src="/img/badge/nav-badge.png" alt="Mini Crest">
					</a>
				</div>
				<ul>
					<li id="wedding-details">
						<a href="/wedding-album" class="active">Wedding Album</a>
					</li>
					<li id="proposal-story">
						<a href="/proposal-story">Proposal Story</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<h1 class="title white text-shadow">Wedding Album</h1>
</header>

<main>
	<section id="memories">
		<h2 class="header centered-text">The wedding may be over, <br>
		but the memories will last forever</h2>
	</section>
	<section id="first-dance">
		<div class="outer-container">
			<div class="row">
				<div class="abstract-swirl">
					<img srcset="/img/wedding-album/first-dance/first-dance-swirl@2x.png 2x" src="/img/wedding-album/first-dance/first-dance-swirl.png" alt="Abstract Swirl">
				</div>
			</div>
		</div>
	</section>
</main>


<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script> -->
<!--<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-55459011-7','auto');ga('send','pageview');
</script>-->
</body>