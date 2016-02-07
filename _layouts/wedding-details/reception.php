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

	<div id="thank-you" style="display: none;" class="modal fade" tabindex="-1" >
		<h1 class="title white text-shadow">Thank You!</h1>
	</div>

	<div class="row" id="tabs">
		<ul class="nav nav-tabs">
			<li>
				<a href="#ceremony" class="header normal">Ceremony</a>
			</li>
			<li class="active">
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
		<article id="reception" class="tab-pane fade in active">
			<h2 class="header">The Reception</h2>
			<p class="large">The Reception is to be held at <span class="inline">Brennan’s of Houston.</span> <br>Festivities begin at 7PM.</p>
			<br>
			<h3 class="header">Time &amp; Location</h3>
			<address class="tldr-box content-container" id="reception">
				<span class="time">7PM</span>
				Brennan's of Houston <br>
				<a href="http://www.brennanshouston.com/" id="map-link" target="_blank">[<span>VENUE WEBSITE</span>]</a> <br>
				<hr>
				3300 Smith St <br>
				Houston, Texas 77006 <br>
				<a href="https://goo.gl/maps/QrNdCMZzP1u" id="map-link" target="_blank">[<span>MAP LINK</span>]</a>
			</address>
			<h2 class="header">Venue Info</h2>
			<h3 class="header">Parking</h3>
			<p class="large"><strong>Street Parking</strong> is available on a first come first serve basis. Because Brennan’s of Houston is located in Midtown, street parking can sometimes be scarce. <br><strong>Valet Parking</strong> is available for $5.</p>
			<img src="{{ site.cdn_url }}/img/wedding-details/reception/brennans-street.jpg" srcset="{{ site.cdn_url }}/img/wedding-details/reception/brennans-street@2x.jpg" alt="Brennan's Street View" id="brennans-street">
			<h3 class="header">Event Details</h3>
			<p class="large">The Reception is in the Ball Room on the second floor of the restaurant. <br>There is an elevator.</p>
			<div class="row">
				<div class="half-wrapper">
					<img src="{{ site.cdn_url }}/img/wedding-details/reception/exterior.jpg" srcset="{{ site.cdn_url }}/img/wedding-details/reception/exterior@2x.jpg" alt="Brennan's Exterior View" id="exterior">
				</div>
				<div class="half-wrapper">
					<img src="{{ site.cdn_url }}/img/wedding-details/reception/ballroom.jpg" srcset="{{ site.cdn_url }}/img/wedding-details/reception/ballroom@2x.jpg" alt="Brennan's Upstairs Ballroom" id="ballroom">
				</div>
			</div>
		</article>
	</section>
</main>



{% include components/scripts/jquery.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/details-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>