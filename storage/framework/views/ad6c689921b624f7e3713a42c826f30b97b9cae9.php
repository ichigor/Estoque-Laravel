<?php $__env->startSection('conteudo'); ?>
<h1>Detalhes do produto  <?php echo e($p->nome); ?>  </h1>
<ul>
	<li>Valor: <?php echo e($p->valor); ?> </li>
	<li>Descricao: <?php echo e($p->descricao); ?> </li>
	<li>Quantidade: <?php echo e($p->quantidade); ?> </li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>