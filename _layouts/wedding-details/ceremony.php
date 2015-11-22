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
</section>

<main class="outer-container">
	<section class="content-container centered-text tab-content" id="main-wrapper">
		<article id="ceremony" class="tab-pane fade in active">
			<h2 class="header container-title">The Ceremony</h2>
			<p class="large">The wedding ceremony will be held in the Chapel of Divine Mercy, located on the <span class="inline-block">St. Laurence Catholic Church</span> grounds.</p>
			<p class="large">St. Laurence is located at the corner of Austin Pkwy and <span class="inline-block">Sweetwater Blvd.</span> <br>The chapel is attached to the school bulding along <span class="inline-block">Austin Pkwy.</span></p>
			<p class="large">The ceremony will begin promptly at 5:30PM. <br>Attire is Black Tie Optional.</p>
			<br>
			<h3 class="header">Time &amp; Location</h3>
			<address class="content-container" id="location-box">
				5:30PM <br>
				The Chapel of Divine Mercy <br>
				<span>located on the</span> <br>
				St. Laurence Catholic Church Grounds <br>
				3100 Sweetwater Blvd <br>
				Sugar Land, Texas 77479
			</address>
		</article>
	</section>
</main>



{% include components/scripts/scripts.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/details-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>