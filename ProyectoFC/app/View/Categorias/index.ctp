<!-- File: /app/View/Categorias/index.ctp -->
<h1>Categorias</h1>
<table>
	<?php echo $this->Html->link('Agregar Categoria', array('controller' => 'categorias', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo $categoria['Categoria']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($categoria['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $categoria['Categoria']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $categoria['Categoria']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $categoria['Categoria']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($categoria); ?>
</table>