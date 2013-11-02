<!-- File: /app/View/CategoriaIvas/index.ctp -->
<h1>CategoriaIvas</h1>
<table>
	<?php echo $this->Html->link('Agregar Categoria Iva', array('controller' => 'categoriaivas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($categoriaivas as $categoriaiva): ?>
	<tr>
		<td><?php echo $categoriaiva['CategoriaIva']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($categoriaiva['CategoriaIva']['descripcion'], array('controller' => 'categoriaivas', 'action' => 'view', $categoriaiva['CategoriaIva']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $categoriaiva['CategoriaIva']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $categoriaiva['CategoriaIva']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($categoriaiva); ?>
</table>