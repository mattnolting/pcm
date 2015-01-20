<!DOCTYPE html>
<html class="chrometwo legacyfalse" xmlns:ng="http://angularjs.org">
<head>
	<?php $homeLink = "https://mnolting.usersys.redhat.com/public/pcm/"; ?>
	<title>Page Title</title>

	<!-- Comment these out to switch to chromed version -->
<!--		<link href="/chrome_themes/nimbus/css/chrometwo.css" rel="stylesheet" />-->
<!--		<script type="text/javascript" src="/webassets/avalon/j/lib/require.js"></script>-->
	<!--	-->

	<!-- Comment these out to switch to chromed version -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!--	-->

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $homeLink; ?>assets/css/main.min.css" rel="stylesheet" />
	<meta content="authenticity_token" name="csrf-param" />
	<meta content="ShQYyag5+LYsSbkrfBsDXad88AAGvTaiIFfOqBSvh2o=" name="csrf-token" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">


</head>

<body class="chrometwo">
	<nav class="home-links">
		<ul>
			<li><a href="/public/pcm">Home</a></li>
			<li><a href="/public/pcm/views/list-filters.php">Case List</a></li>
			<li><a href="/public/pcm/views/case-single.php">Case Single</a></li>
			<li><a href="/public/pcm/views/case-new.php">New Case</a></li>
		</ul>
	</nav>

<div id="chrometwo">
	<div class="container page" id="chromed-app-content">