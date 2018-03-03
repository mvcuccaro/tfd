<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/people.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/js/people.js"></script>
	<script type="text/javascript">
		var people 					= JSON.parse('{!! $people !!}');
	</script>
	<title>tfd</title>
</head>
<body class="bg-white">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 border border-light bg-dark">
				<div class="row">
					<div class="col-sm-12 text-center"><h1>TFD Test People</h1></div>
				</div>
				<div id="table_container">
					<div class="row" id="table_header">
						<div class="col-sm-4 bg-info sortable_column" id="first_name">
							First Name <span id="first_name_direction" class="sort_arrow"></span>
						</div>
						<div class="col-sm-4 bg-info sortable_column" id="last_name">
							Last Name <span id="last_name_direction" class="sort_arrow"></span>
						</div>
						<div class="col-sm-4 bg-info sortable_column" id="favorite_color">
							Favorite color <span id="favorite_color_direction" class="sort_arrow"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>