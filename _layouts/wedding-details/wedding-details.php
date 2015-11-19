{% include components/head.php %}

<body id="wedding-details">

<div id="tour-deiffel-bg"><!--awesome photo here--></div>

<header>
	<nav class="outer-container">
		<div class="row">
			<div id="crest-wrapper">
				<a href="/">
					<img src="{{ site.cdn_url }}/img/badge/nav-badge.png" alt="Mini Crest">
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
		</ul>
	</div>
</section>

<main class="outer-container">
	<section class="content-container centered-text tab-content" id="main-wrapper">
		<article id="ceremony" class="tab-pane fade in active">
			<h2 class="header normal container-title">Ceremony Location</h2>
			<address class="content-container" id="location-box">
				<h3>The Chapel of Divine Mercy <br>
				<span>located on the</span> <br>
				St. Laurence Catholic Church Grounds <br>
				3100 Sweetwater Blvd <br>
				Sugar Land, Texas 77479</h3>
			</address>
			<p class="large">The wedding ceremony will be held in the Chapel of Divine Mercy, located on the St Laurence Catholic Church grounds.</p>
			<p class="large">The Chapel is attached to the School Building along Austing Parkway. <br>It is separate from the actual church.</p>
			<hr>
			<h2 id="more-info" class="header">More info will be provided as the wedding date approaches.</h2>
		</article>
		<article id="reception" class="tab-pane fade">
			<h2 class="header">Reception Details</h2>
			<p class="large">The Reception is to be held at <a href="http://www.brennanshouston.com/" target="_blank" class="inline">Brennan’s of Houston</a> <br>
			Festivities begin at 7PM</p>
			<p style="margin-bottom: 8px;">Reception Info</p>
			<address class="content-container" id="location-box">
				<h3>7PM at Brennan's of Houston <br>
				3300 Smith St <br>
				Houston, Texas 77006</h3>
			</address>
			<h2 class="header">Venue Info</h2>
			<div id="parking">
				<h3>Parking</h3>
				<p class="large"><strong>Street Parking</strong> is available on a first come first serve basis. Because Brennan’s of Houston is located in Midtown, street parking can sometimes be scarce. <br><strong>Valet Parking</strong> is available for $5. </p>
			</div>
			<div id="event-details">
				<h3>Event Details</h3>
				<p class="large">The Reception is in the Ball Room on the second floor of the restaurant. There is an elevator.</p>
			</div>
			<hr>
			<h2 id="more-info" class="header">More info will be provided as the wedding date approaches.</h2>
		</article>
	</section>
</main>



{% include components/scripts/scripts.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/details-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>