<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		var people = JSON.parse('{!! $people !!}');
		console.log(people);
	</script>
	<title>tfd</title>
</head>
<body class="bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 border border-light bg-dark">
				<div class="row">
					<div class="col-sm-6 text-center"><h1>TFD Test People</h1></div>
				</div>
				<div class="row">
					<div class="col-sm-3 bg-info">First Name</div>
					<div class="col-sm-3 bg-info">Last Name</div>
					<div class="col-sm-3 bg-info">Favorite color</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>