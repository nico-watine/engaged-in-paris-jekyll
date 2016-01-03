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
	<div class="row" id="tabs">
		<ul class="nav nav-tabs">
			<li class="active">
				<a data-toggle="tab" href="#ceremony" class="header normal ceremony">Ceremony</a>
			</li>
			<li>
				<a data-toggle="tab" href="#reception" class="header normal reception">Reception</a>
			</li>
			<li>
				<a data-toggle="tab" href="#rsvp" class="header normal reception">RSVP</a>
			</li>
		</ul>
	</div>
</section>

<main class="outer-container">
	<section class="content-container centered-text tab-content" id="main-wrapper">
		<article id="registry" class="tab-pane fade in active">
			<h2 class="header">Registry</h2>
			<p class="large" style="text-align: left;">Hello family &amp; friends,
			<br><br>
			Thank you so much for being a part of our special day. Please do not feel that you have to buy us a wedding gift. Your presence at our wedding is the greatest gift of all. However if you wish to honour us with a gift, we have set up a savings registry through the honeymoon-service website www.honeyfund.com.
			<p class="large" style="text-align: left;">Your gift will be put towards our #teamwatine savings, our future home and our honeymoon.</p>
			<br>
			<hr>
			<br>
			<h3 class="header margin-bottom">Our Honeyfund Registry Page:</h3>
			<h4 id="honeyfund-link"><a href="http://www.honeyfund.com/wedding/teamwatine" target="_blank">www.honeyfund.com/wedding/<span>teamwatine</span></a></h4>
			<br><br>
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