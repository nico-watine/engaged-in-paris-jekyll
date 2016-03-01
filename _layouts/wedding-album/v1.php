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
	<section id="first-dance" style="margin-bottom: 200px;">
		<div class="outer-container">
			<div class="row">
				<h2 class="title white text-shadow centered-text">First Dance Video</h2>
				<div class="video-wrapper">
					<div class="iframe-wrapper">
						<iframe src="https://www.youtube.com/embed/EnB86TDmzvY" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>


<!-- {% include components/scripts/jquery.php %} -->
{% include components/scripts/google-tracking.php %}
</body>

<!-- width="745" height="420"  -->