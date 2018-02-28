@extends('layouts.default', ['title' => 'About'])


@section('content')
    <div class="container">
    	<h1>What is Laracarte?</h1>
    	<p>Laracarte is a clone app of <a href="" title="">Laramap.com.</a></p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning">
    				<strong><i class="fa fa-exclamation-triangle"></i>This app has been built by <a href="http://twitter.com/chafy07">@chafy07</a> for learning purposes.</strong>
    			</p>
    		</div>
    	</div>
    	<p>Feel free to help to improve the <a href="https://github.com/abdiaschafy/laracarte">source code.</a></p>

    	<hr>

    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which Laracarte was inspired :).</p>
    <p>More info <a href="here"></a>.</p>

    <hr>

    <h2>Which tools and services are used in Laracarte?</h2>
    <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
    <ul>
    	<li>Laravel</li>
    	<li>Bootstrap</li>
    	<li>Amazon S3</li>
    	<li>Mandrill</li>
    	<li>Google Maps</li>
    	<li>Gravatar</li>
    	<li>Antony Martin's Geolocation Package</li>
    	<li>Michel Fortin's Markdown Parser Package</li>
    	<li>Heroku</li>
    </ul>
    </div>

@stop