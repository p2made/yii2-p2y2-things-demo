<?php
$title = 'page_title';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $title ?> | Full Calendar</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.print.css" rel="stylesheet" type="text/css">

	<link href="assets/css/demo-basic.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php">Calendars</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Calendar Demos <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../full-calendar/index.php">Default</a></li>
							<li><a href="../full-calendar/agenda-views.php">Agenda Views</a></li>
							<li><a href="../full-calendar/background-events.php">Background Events</a></li>
							<li><a href="../full-calendar/basic-views.php">Basic Views</a></li>
							<li><a href="../full-calendar/external-dragging.php">External Dragging</a></li>
							<li><a href="../full-calendar/gcal.php">gCal</a></li>
							<li><a href="../full-calendar/json.php">JSON</a></li>
							<li><a href="../full-calendar/languages.php">Languages</a></li>
							<li><a href="../full-calendar/selectable.php">Selectable</a></li>
							<li><a href="../full-calendar/theme.php">theme</a></li>
							<li><a href="../full-calendar/timezones.php">Timezones</a></li>
						</ul>
					</li>

					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Bootstrap Calendar <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../bootstrap-calendar/index.php">Default</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">Full Calendar - <?= $title ?></h1>

				<div id='calendar'></div>
			</div>
		</div>

	</div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js"></script>

	<script src="data/file_name.js"></script>
</body>
</html>

––––– ^ ––––– ^ ––––– ^ ––––– ^ ––––– ^ –––––

