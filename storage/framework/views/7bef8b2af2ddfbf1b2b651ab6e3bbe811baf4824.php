<?php $__env->startSection('conteudo'); ?>


<div class="alert alert-danger">
	<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
		<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</ul>
</div>


<form action="/produtos/adiciona" method="post">

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>

	<div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control" />
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input name="valor" class="form-control" />
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input name="quantidade" class="form-control" />
	</div>
	<div class="form-group">
		<label>Tamanho</label>
		<input name="tamanho" class="form-control" />
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<select name="categoria_id" class="form-control" >
			<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($c->id); ?>"><?php echo e($c->nome); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select> 
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input name="descricao" class="form-control" />
	</div>
	<button class="btn btn-primary" type="submit">Adicionar</button>
	
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>