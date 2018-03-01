@extends('layouts.default')

@section('title','contact')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get In Touch</h2>
			<p class="text-muted">If you having trouble with this service, please <a href="mailto:abdiaschafang@gmailcom">ask for help</a>.</p>

			<form method="POST" action="/contact">

	            <div class="form-group ">
	                <label class="control-label">Name</label>
	                <input type="text" name="name" id="name" class="form-control" value="" required="required">
	            </div>

	            <div class="form-group ">
	                <label class="control-label">Email</label>
	                <input type="email" name="email" value="" class="form-control" required="required">
	            </div>


	            <div class="form-group ">
	            	<label class="control-label sr-only" for="message">Message</label>
	                <textarea class="form-control" name="message" rows="10" cols="10" required="required"></textarea>
	            </div>

	            <div class="form-group">
	                <button type="submit" class="btn btn-primary btn-block">Envoyer votre message &raquo;</button>
	            </div>
		    </form>
		</div>
	</div>
</div>
@stop