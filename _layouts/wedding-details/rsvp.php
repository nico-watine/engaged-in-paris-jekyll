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
			                <span>Your full name</span><input type="text" id="name" name="name" placeholder="First &amp; Last please" />
				        </div>
				        <div class="form-row">
			                <span>Your email</span><input type="text" id="email" name="email" placeholder="For last minute updates" />
				        </div>
				        <div class="form-row" id="buttons">
				        	<span class="question">Will you be attending?</span>
				            <div class="form-button">
				            	<label><input type="checkbox" name="attendance-status" value="WILL be attending"><br>Accepts With Pleasure</label>
				            </div>
				            <div class="form-button">
				                <label><input type="checkbox" name="attendance-status" value="Will NOT be attending"><br>Declines with regret</label>
				            </div>
				        </div>
				        <div class="form-row" id="buttons">
				        	<hr>
				        	<span class="question">Are you bringing a guest?</span>
				            <div class="form-button">
				            	<label><input type="checkbox" name="guest-status" value="WILL be bringing a guest"><!-- &nbsp;  -->&nbsp; Yes</label>
				            </div>
				            <div class="form-button">
				                <label><input type="checkbox" name="guest-status" value="Will NOT be bringing a guest"><!-- &nbsp;  -->&nbsp; No</label>
				            </div>
				        </div>
				        <div class="form-row" id="guest-name">
			                <span>Name of Guest</span><input type="text" id="email" name="email" placeholder="First &amp; Last please" />
				        </div>
				        <div class="form-row">
				            <button type="submit" name="submit" id="submit" class="button big-green-button header">Send RSVP</button>
				        </div>
				    </div>
				</form>
		</article>
	</section>
</main>



{% include components/scripts/scripts.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/details-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>