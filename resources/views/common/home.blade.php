@extends('layout.main')
<link rel="stylesheet" href="/css/style.css">
<div class="navbar" style="margin-bottom: 0 !important" id="myNav" >
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="\">UTB-CUHK</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a></li>
				<li><a href="/">Services</a></li>
				<li><a href="/">Promotion</a></li>
				<li><a href="/">About</a></li>
				<li><a href="/">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/"><span class="glyphicon glyphicon-user"></span> {!!$username!!}</a></li>
				<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   			</ul>
		</div>
	</nav>
</div>
@section('content')
<div class="container text-center">
	<h3>THE INTERNS</h3>
	<p><em>Old interns from Brunei</em></p>
	<p>Featuring you two interns from the country of hidden treasure; two IT-students from a so-called prestigious IT-university.</p>
	<p>Positive mindset leads to Positive outcome</p>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<p class="text-center"><strong>Salihin</strong></p><br>
				<img src="/image/salihin.jpg" class="img-circle person" alt="salihin">
			<div id="demo">
				<p>Born in November 20th</p>
				<p>Cyclist-wannabe</p>
				<p>Day-Dreaming Specialist</p>
			</div>
		</div>
		<div class="col-sm-4">
			<p class="text-center"><strong>Salihin</strong></p><br>
				<img src="/image/salihin.jpg" class="img-circle person" alt="salihin">
			<div id="demo2">
				<p>Born in November 20th</p>
				<p>Cyclist-wannabe</p>
				<p>Day-Dreaming Specialist</p>
			</div>
		</div>
		<div class="col-sm-4">
			<p class="text-center"><strong>Salihin</strong></p><br>
			
				<img src="/image/salihin.jpg" class="img-circle person" alt="salihin">
		
			<div id="demo3">
				<p>Born in November 20th</p>
				<p>Cyclist-wannabe</p>
				<p>Day-Dreaming Specialist</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love to answer your questions!</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Question? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Brunei Darussalam</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: +673-8668454</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: utbinterns2017@gmail.com</p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<footer class="text-center">
  <a class="up-arrow" href="#myNav" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>UTB-CUHK Interns | 2017</p> 
</footer>

{{-- <script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script> --}}


@stop