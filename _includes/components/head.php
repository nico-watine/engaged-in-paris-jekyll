<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>{{ page.title }} | WEBSITE NAME</title>
	<meta name="description" content="{{ page.description }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="{{ site.cdn_url }}<?php autoVer('/css/style.css'); ?>" />

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="{{ site.cdn_url }}/css/ie.css" />
		<script src="{{ site.cdn_url }}/js/ie-min.js"></script>
	<![endif]-->
</head>