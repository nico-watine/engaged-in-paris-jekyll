<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<!--<link rel="preconnect" href="http://cdn.nicowatine.me/wegotengagedinparis">-->
	<title>Come Celebrate With Us! | Nico &amp; Corinne Are Engaged!</title>
	<meta name="description" content="Come celebrate the marriage of Nico Watine &amp; Corinne Reyes!" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>" />
</head>

<body id="index">

<img class="wedding-crest" src="/img/badge/badge.png" alt="Nico &amp; Corinne Wedding Crest">

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

<div id="myModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <h1 class="title">Lorem Ipsum</h1>
    </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/bower_components/boostrap-sass/assets/javascripts/bootstrap.js"></script>
<script>
$(document).ready(function() {

  if(window.location.href.indexOf('#myModal') != -1) {
    $('#myModal').modal('show');
  }

});
</script>
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