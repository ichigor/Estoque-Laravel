<?php $__env->startSection('conteudo'); ?>


<div class="alert alert-danger">
	<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</ul>
</div>


<form action="/logar" method="post">

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>

	<div class="form-group">
		<label>Email</label>
		<input name="email" class="form-control" />
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="password" class="form-control" />
	</div>
	<button class="btn btn-primary" type="submit">Adicionar</button>
	
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>