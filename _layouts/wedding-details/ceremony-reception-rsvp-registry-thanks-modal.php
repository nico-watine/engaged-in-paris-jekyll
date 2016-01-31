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
			<li class="active">
				<a href="#ceremony" class="header normal">Ceremony</a>
			</li>
			<li>
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
		<article id="ceremony" class="tab-pane fade in active">
			<h2 class="header">The Ceremony</h2>
			<p class="large">The wedding ceremony will be held in the Chapel of Divine Mercy, located on the <span class="inline-block">St. Laurence Catholic Church</span> grounds.</p>
			<p class="large">St. Laurence is located at the corner of Austin Pkwy and <span class="inline-block">Sweetwater Blvd.</span> <br>The chapel is attached to the school bulding along <span class="inline-block">Austin Pkwy.</span></p>
			<p class="large">The ceremony will begin promptly at 5:30PM. <br>Attire is Black Tie Optional.</p>
			<br>
			<h3 class="header">Time &amp; Location</h3>
			<address class="tldr-box content-container" id="ceremony">
				<span class="time">5:30PM</span>
				The Chapel of Divine Mercy <br>
				<span class="tiny">located on the</span> <br>
				St. Laurence Catholic Church Grounds
				<hr>
				2630 Austin Pkwy <br>
				Sugar Land, Texas 77479<br>
				<a href="https://goo.gl/maps/MWiXuqWRQyz" id="map-link" target="_blank">[<span>MAP LINK</span>]</a>
			</address>
		</article>
		<article id="reception" class="tab-pane fade">
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
			<br>
			<h3 class="header">Event Details</h3>
			<p class="large">The Reception is in the Ball Room on the second floor of the restaurant. <br>There is an elevator.</p>
			<br>
		</article>
		<article id="rsvp" class="tab-pane fade">
			<h2 class="header">RSVP</h2>
			<p class="large">The favor of your reply is requested by <span class="inline-block">January 20, 2016.</span></p>
				<form name="rsvp-form" id="rsvp-form" action="/php/submit-rsvp" enctype="multipart/form-data" method="post" /> 
				    <div class="row">
				        <div class="form-row">
			                <span>Your full name</span><input type="text" id="name" name="guest-name" placeholder="First &amp; Last please" />
				        </div>
				        <div class="form-row">
			                <span>Your email</span><input type="text" id="email" name="guest-email" placeholder="For last minute updates" />
				        </div>
				        <div class="form-row" id="buttons">
				        	<span class="question">Will you be attending?</span>
				            <div class="form-button">
				            	<label><input type="checkbox" name="attendance-status" value="YES - WILL be attending"><br>Accepts With Pleasure</label>
				            </div>
				            <div class="form-button">
				                <label><input type="checkbox" name="attendance-status" value="NO - Will NOT be attending"><br>Declines with regret</label>
				            </div>
				        </div>
				        <div class="form-row" id="buttons">
				        	<hr>
				        	<span class="question">Are you bringing a guest?</span>
				            <div class="form-button">
				            	<label><input type="checkbox" name="plus-one-status" value="YES - WILL be bringing a guest"><!-- &nbsp;  -->&nbsp; Yes</label>
				            </div>
				            <div class="form-button">
				                <label><input type="checkbox" name="plus-one-status" value="NO - will NOT be bringing a guest"><!-- &nbsp;  -->&nbsp; No</label>
				            </div>
				        </div>
				        <div class="form-row" id="guest-name">
			                <span>Name of Guest</span><input type="text" id="email" name="plus-one-name" placeholder="First &amp; Last please" />
				        </div>
				        <div class="form-row">
				            <button type="submit" name="submit" id="submit" class="button floating header">Send RSVP</button>
				        </div>
				    </div>
				</form>
		</article>
		<article id="registry" class="tab-pane fade">
			<h2 class="header">Registry</h2>
			<p class="large">Hello family &amp; friends,
			<br><br>
			Thank you so much for being a part of our special day. Please do not feel that you have to buy us a wedding gift. Your presence at our wedding is the greatest gift of all. However if you wish to honour us with a gift, we have set up a savings registry through the honeymoon-service website www.honeyfund.com.
			<p class="large">Your gift will be put towards our #teamwatine savings, our future home and our honeymoon.</p>
			<br>
			<hr>
			<br>
			<h3 class="header margin-bottom">Our Honeyfund Registry Page:</h3>
			<h4 id="honeyfund-link"><a href="http://www.honeyfund.com/wedding/teamwatine" target="_blank">www.honeyfund.com/wedding/<span>teamwatine</span></a></h4>
			<br><br>
		</article>
	</section>
</main>



{% include components/scripts/jquery.php %}
<script src="{{ site.cdn_url }}<?php autoVer('/js/details-min.js'); ?>"></script>
{% include components/scripts/google-tracking.php %}

</body>
</html>