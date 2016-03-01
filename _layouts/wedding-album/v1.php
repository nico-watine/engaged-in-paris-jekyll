{% include components/head.php %}

<body id="wedding-album">

<header>
	<nav>
		<div class="outer-container">
			<div class="row">
				<div id="crest-wrapper">
					<a href="/">
						<img src="{{ site.cdn_url }}/img/badge/nav-badge.png" alt="Mini Crest">
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
					<img srcset="{{ site.cdn_url }}/img/wedding-album/first-dance/first-dance-swirl@2x.png 2x" src="{{ site.cdn_url }}/img/wedding-album/first-dance/first-dance-swirl.png" alt="Abstract Swirl">
				</div>
			</div>
		</div>
	</section>
</main>


<!-- {% include components/scripts/jquery.php %} -->
{% include components/scripts/google-tracking.php %}
</body>