<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	{{ site.start_comment }}<link rel="preconnect" href="http://cdn.nicowatine.me/wegotengagedinparis">{{ site.end_comment }}
	<title>{{ page.title }} | Nico &amp; Corinne Are Engaged!</title>
	<meta name="description" content="{{ page.description }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="{{ site.cdn_url }}<?php autoVer('/css/style.css'); ?>" />
</head>

<body id="index">

<img class="wedding-crest" src="{{ site.cdn_url }}/img/badge/badge.png" alt="Nico &amp; Corinne Wedding Crest">

<nav>
	<ul>
		<li>
			<a href="/wedding-details">Wedding Details</a>
		</li>
		<li>
			<a href="/proposal-story">Proposal Story</a>
		</li>
	</ul>
</nav>

<!-- Small modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->

<div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <h1 class="title">Lorem Ipsum</h1>
    </div>
  </div>
</div>

<!-- <a href="#thanks-modal" class="open-popup-link">Show inline popup</a>

<div id="thanks-modal" class="mfp-hide mfp-zoom-in">
	<button title="Close (Esc)" type="button" class="mfp-close icon-close-button"></button>
	<h2>Thanks for the message!</h2>
	<p>I'm already responding to it, so look out for my email.</p>
</div> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/bower_components/boostrap-sass/assets/javascripts/bootstrap.js"></script>
<script>
$(document).ready(function() {

  if(window.location.href.indexOf('#myModal') != -1) {
    $('#myModal').modal('show');
  }

});
</script>
{% include components/scripts/google-tracking.php %}
</body>
</html>