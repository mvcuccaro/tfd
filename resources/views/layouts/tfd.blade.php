<!-- The master template -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/people.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<title>tfd</title>
</head>
<body class="bg-grey">
	<div id="header">
		<h1>Welcome to TFD</h1>
	</div>
	@yield('content')
	<div id="#footer">
		Provided by Michael Cuccaro - All pretend rights reserved
	</div>
</body>
</html>