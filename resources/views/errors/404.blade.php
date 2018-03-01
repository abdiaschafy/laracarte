@extends('layouts.default')

@section('title')
	Page non trouvé	
@stop
	<div class="wrapper row2">
	  <div id="container" class="clear">
	    <section id="fof" class="clear">
	      <div class="hgroup">
	        <h1><span><strong>4</strong></span><span><strong>0</strong></span><span><strong>4</strong></span></h1>
	        <h2>Error ! <span>Page Not Found</span></h2>
	      </div>
	      <p>For Some Reason The Page You Requested Could Not Be Found On Our Server</p>
	      <p><a class="btn btn-primary" href="{{ route('home_path') }}">&laquo; Home</a> / <a class="btn btn-success" href="{{ route('contact_path') }}">Contact &raquo;</a></p>
	    </section>
	  </div>
	</div>

	<style type="text/css" media="screen">
		#fof{display:block; width:100%; margin:100px 0; line-height:1.6em; text-align:center;}
		#fof .hgroup{text-transform:uppercase;}
		#fof .hgroup h1{margin-bottom:25px; font-size:80px;}
		#fof .hgroup h1 span{display:inline-block; margin-left:5px; padding:2px; border:1px solid #CCCCCC; overflow:hidden;}
		#fof .hgroup h1 span strong{display:inline-block; padding:0 20px 20px; border:1px solid #CCCCCC; font-weight:normal;}
		#fof .hgroup h2{font-size:60px;}
		#fof .hgroup h2 span{display:block; font-size:30px;}
		#fof p{margin:25px 0 0 0; padding:0; font-size:16px;}
		#fof p:first-child{margin-top:0;}
	</style>

@section('content')
	
@stop