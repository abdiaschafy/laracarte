<!DOCTYPE html>
<html>
<head>
	<title>
    	@yield('title')
    </title>
</head>
<body>
	@yield('content')
</body>
</html>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body class="container" style="padding-top:60px ">
	@include('layouts.partials._nav')
	@yield('contenu')
	@include('layouts.partials._footer')
</body>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	@include('flashy::message')
<style>
	body{
		font-family: 'Open Sans', sans serif;
	}
	footer{
		margin: 4em 0;
	}
</style>

</html>