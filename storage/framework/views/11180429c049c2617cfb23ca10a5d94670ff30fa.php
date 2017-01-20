<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="http://www.favicon.cc/logo3d/512858.png">
	<title>My Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('heading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	
	
<?php echo $__env->yieldContent('content'); ?>



	


</body>
</html>