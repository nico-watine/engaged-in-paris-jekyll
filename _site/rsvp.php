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
<!-- 	<div class="row" id="tabs">
		<ul class="nav nav-tabs">
			<li class="active">
				<a data-toggle="tab" href="#ceremony" class="header normal ceremony">Ceremony</a>
			</li>
			<li>
				<a data-toggle="tab" href="#reception" class="header normal reception">Reception</a>
			</li>
		</ul>
	</div> -->
</section>

<main class="outer-container">
	<section class="content-container centered-text tab-content" id="main-wrapper">
		<article id="rsvp" class="tab-pane fade in active">
			<h2 class="header">RSVP</h2>
			<p class="large">The favor of your reply is requested by <span class="inline-block">January 20, 2016.</span></p>
				<form name="rsvp-form" id="rsvp-form" action="/php/submit-rsvp" enctype="multipart/form-data" method="post" /> 
				    <div class="row">
				        <div class="form-row">
			                Your full name<input type="text" id="name" name="name" placeholder="your name" />
				        </div>
				        <div class="form-row">
			                Your email<input type="text" id="email" name="email" placeholder="your email address" />
				        </div>
				        <div class="form-row" id="buttons">
				            <div class="form-button">
				                <input type="radio" name="site-status" value="I already have a website"><label for="have-site">I already have a website</label>
				            </div>
				            <div class="form-button" id="omega">
				                <input type="radio" name="site-status" value="I don't have my own site"><label for="no-site">I don't have my own site</label>
				            </div>
				        </div>
				        <div class="form-row" id="message-box">
				            <label>So how can I help?
				                <textarea type="text" id="msg" name="message" placeholder="your message"></textarea>
				            </label>
				        </div>
				        <div class="form-row">
				            <button type="submit" name="submit" id="submit" class="button big-green-button header">Send away...</button>
				        </div>
				    </div>
				</form>
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