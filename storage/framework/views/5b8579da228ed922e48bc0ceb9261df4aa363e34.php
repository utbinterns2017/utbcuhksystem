<div class="navbar" style="margin-bottom: 0 !important">
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
				<li><a href="/"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
				<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   			</ul>
		</div>
	</nav>
</div>
<?php $__env->startSection('content'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>