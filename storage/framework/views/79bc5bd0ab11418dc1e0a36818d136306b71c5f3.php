<link rel="stylesheet" href="/css/style.css">

<?php $__env->startSection('navbar'); ?>
<?php $__env->startSection('content'); ?>
	<form class="form-horizontal col-md-6 col-md-offset-3" action="submitReg" method="POST" name="regForm" autocomplete="off">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<h2>Registration</h2>
		<div class="form-group">
			<label class="control col-md-2" for="username">Username:</label>
			<div class="col-md-10">
				<input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
			</div>
		</div>

		<div class="form-group">
			<label class="control col-md-2" for="email">Email:</label>
			<div class="col-md-10">
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
			</div>
		</div>

		<div class="form-group">
			<label class="control col-md-2" for="password">Password:</label>
			<div class="col-md-10">
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
			</div>
		</div>


		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-default">Register</button>
			</div>
		</div>

		<div class="col-md-12">
				<?php if(count($errors)): ?>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				    	<p style="text-align:center;color:red"><?php echo e($error); ?></p>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<?php endif; ?>
		</div>

	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>