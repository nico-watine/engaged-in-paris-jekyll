{% include components/head.php %}

<body>
<div id="skrollr-body">
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
		<div class="verbiage">
			<h1 class="title white text-shadow">The Proposal</h1>
			<h3 class="header white text-shadow">In October of 2014, Nico and Corinne went to France for a family wedding.</h3>
			<h3 class="header white text-shadow">Little did Corinne know that Nico had a surprise planned…</h3>
			<img src="{{ site.cdn_url }}/img/proposal-story/assets/circular-arrow.png" alt="Down Arrow" class="down-arrow">
		</div>
	</div>
	<video autoplay loop preload="auto" poster="{{ site.cdn_url }}/img/proposal-story/video/splash/poster.jpg" class="bgvid" id="is-desktop">
		<source src="{{ site.cdn_url }}/img/proposal-story/video/splash/eiffel-1.webm" type="video/webm">
		<source src="{{ site.cdn_url }}/img/proposal-story/video/splash/eiffel-1.mp4" type="video/mp4">
	</video>
</section>


<section id="parallax-ring" data-bottom-top="background-position:20% 100%;" data-top-bottom="background-position:20% 0px;">
	<div class="fade-out" data-center-top="background:rgba(0, 0, 0, 0);" data-bottom="background:rgba(0,0,0,1);"></div>
</section>


<section id="lock-bridge" class="proposal-opportunity">
	<div class="map-header">
		<article>
			<h3 class="header">1st Proposal Opportunity</h3>
			<h2 class="title">The Lock Bridge</h2>
			<p class="large">The Lock Bridge is famous for the thousands of padlocks that lovers have attached to the railings after signing their names on one and throwing the key into The Seine river below.
			<br><br>
			The bridge has so many locks on it that it cannot handle the weight, and attaching new padlocks is now forbidden.
			<br><br>
			Proposing here would have been way too predictable…</p>
		</article>
	</div>
	
	<h3 class="header" id="selfie">Nico decided that since he wasn’t proposing here that they should instead just take a selfie</h3>

	<div class="section-photos">
		<div class="row photo-row double-photo">
			<div class="photo-wrapper" id="first">
				<img src="{{ site.cdn_url }}/img/proposal-story/lock-bridge/selfie.jpg" srcset="{{ site.cdn_url }}/img/proposal-story/lock-bridge/selfie@2x.jpg" alt="Nico &amp; Corinne Selfie on the Lock Bridge">
			</div>
			<div class="photo-wrapper" id="second">
				<img src="{{ site.cdn_url }}/img/proposal-story/lock-bridge/corinne.jpg" srcset="{{ site.cdn_url }}/img/proposal-story/lock-bridge/corinne@2x.jpg" alt="Corinne Posing For A Photo On The Lock Bridge">
			</div>
		</div>
		<div class="row photo-row single-photo">
			<img src="{{ site.cdn_url }}/img/proposal-story/lock-bridge/lock-bridge.jpg" srcset="{{ site.cdn_url }}/img/proposal-story/lock-bridge/lock-bridge@2x.jpg" alt="Side View Of The Lock Bridge">
		</div>
	</div>
</section>

<section id="notre-dame" class="proposal-opportunity">
	<div class="map-header">
		<article>
			<h3 class="header">2nd Proposal Opportunity</h3>
			<h2 class="title">Notre Dame Cathedral</h2>
			<p class="large">Widely considered to be the most famous of all the cathedrals in Paris, Notre Dame is a beautiful site to behold.
			<br><br>
			Given that every tourist in Paris goes to the Cathedral, there were a few too many people for a proposal to be both memorable and intimate at this location.</p>
		</article>
	</div>

	<div class="section-photos">
		<div class="row photo-row single-photo">
			<figure>
				<img src="{{ site.cdn_url }}/img/proposal-story/notre-dame/notre-dame-facade.jpg" alt="Front Facade of Notre Dame">
				<h3 class="header">The front facade of Notre Dame</h3>
			</figure>
		</div>
		<div class="row photo-row full-photo">
			<figure class="in-caption" id="notre-dame-back">
				<img src="{{ site.cdn_url }}/img/proposal-story/notre-dame/notre-dame-panorama.jpg" alt="Back View of Notre Dame">
				<div class="verbiage-container">
					<h3 class="header">The back side of <span class="inline-block">Notre Dame</span> at dusk</h3>
					<h4>This photo was taken while on a boat tour along the <span class="inline-block">Seine River.</span></h4>
				</div>
			</figure>
		</div>
	</div>
</section>

<section id="louvre" class="proposal-opportunity">
	<h3 class="header">3rd Proposal Opportunity</h3>
	<div id="panorama-banner">
		<h2 class="title white text-shadow">The Louvre</h2>
	</div>
	<figure id="louvre-pyramid" class="outer-container padding">
		<img src="{{ site.cdn_url }}/img/proposal-story/louvre/louve-pyramid.jpg" alt="Corinne in front of the Louvre Pyramid">
		<div class="verbiage-container">
			<p class="large">With its iconic glass pyramid and exhibit halls filled with masterpieces, the Louvre Museum attracts art history buffs and selfie-stickers alike. This place was packed!</p>
		</div>
	</figure>
	<div id="louvre-gardens">
		<h4>The Louvre Gardens were calmer and offered a nice break from walking all over Paris.</h4>
		<div class="row photo-row double-photo">
			<div class="photo-wrapper" id="first">
				<img src="{{ site.cdn_url }}/img/proposal-story/louvre/nico@2x.jpg" alt="Suave Nico">
			</div>
			<div class="photo-wrapper" id="second">
				<img src="{{ site.cdn_url }}/img/proposal-story/louvre/corinne@2x.jpg" alt="Beautiful Corinne">
			</div>
		</div>
		<h4>Still, there was no proposal-mojo to be found here.</h4>
	</div>
</section>

<section id="night-time" data-bottom-top="background:rgba(0, 0, 0, 0);" data-bottom="background:rgba(0,0,0,1);">
	<div class="row" id="text" data-bottom="opacity: 0; top: 0%;" data-200-top="opacity: 1; top: 15%;" data-100-top="top: 30%;">
		<h3 class="header white text-shadow">The Final Proposal</h3>
		<h2 class="title white text-shadow">Sacré-Cœur Basilica</h2>
	</div>
	<div class="row" id="photo" data-bottom-top="opacity: 0; top: 25%;" data-center-top="opacity: 1; top: 5%;">
		<img src="{{ site.cdn_url }}/img/proposal-story/sacre-coeur/sacre-coeur.jpg" alt="Sacre-Coeur Basilica">
	</div>
</section>

<section id="sacre-coeur-dark" class="final-proposal">
	<div class="row photo-row">
		<figure class="in-caption" id="sacre-coeur-night">
			<img src="{{ site.cdn_url }}/img/proposal-story/sacre-coeur/sacre-coeur.jpg" alt="Sacre-Coeur Basilica">
			<div class="verbiage-container">
				<h3 class="header white text-shadow">The Final Proposal</h3>
				<h2 class="title white text-shadow">Sacré-Cœur Basilica</h2>
			</div>
		</figure>
	</div>
	<div id="summary">
		<div class="row">
			<div class="verbiage">
				<p class="large">Finally after a long day of walking all through Paris, Nico and Corinne headed towards a section of the city called Monmarte, where they would be staying. <br><br>
				Monmarte is widely known for the beautiful church on the top of the hill in its center - the Sacré-Cœur Basilica. <br><br>
				When they arrived at the church it was evening, and they could see all of Paris lit up from this hill vista. With the church choir (conveniently) singing in the background, Nico knew this was the place.</p>
			</div>
			<div class="feature-photos">
				<div class="photo">
					<img src="/img/proposal-story/sacre-coeur/church-portrait.jpg" alt="">
				</div>
				<div class="photo">
					<img src="/img/proposal-story/sacre-coeur/selfie.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section id="sacre-coeur" class="final-proposal">
	<div class="row photo-row">
		<figure class="in-caption" id="sacre-coeur-night">
			<img src="{{ site.cdn_url }}/img/proposal-story/sacre-coeur/sacre-coeur.jpg" alt="Sacre-Coeur Basilica">
			<div class="verbiage-container">
				<h3 class="header white text-shadow">The Final Proposal</h3>
				<h2 class="title white text-shadow">Sacré-Cœur Basilica</h2>
			</div>
		</figure>
	</div>
	<div id="summary">
		<div class="row">
			<div class="verbiage">
				<p class="large">Finally after a long day of walking all through Paris, Nico and Corinne headed towards a section of the city called Monmarte, where they would be staying. <br><br>
				Monmarte is widely known for the beautiful church on the top of the hill in its center - the Sacré-Cœur Basilica. <br><br>
				When they arrived at the church it was evening, and they could see all of Paris lit up from this hill vista. With the church choir (conveniently) singing in the background, Nico knew this was the place.</p>
			</div>
			<div class="feature-photos">
				<div class="photo">
					<img src="/img/proposal-story/sacre-coeur/church-portrait.jpg" alt="">
				</div>
				<div class="photo">
					<img src="/img/proposal-story/sacre-coeur/selfie.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section> -->

</div><!-- /#skrollr-body -->

{% include components/scripts/jquery.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/proposal-story-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>