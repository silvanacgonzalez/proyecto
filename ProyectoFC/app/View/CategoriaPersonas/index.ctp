<!-- File: /app/View/CategoriaPersonas/index.ctp -->
<h1>CategoriaPersonas</h1>
<table>
	<?php echo $this->Html->link('Agregar Categoria Persona', array('controller' => 'categoriapersonas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($categoriapersonas as $categoriapersona): ?>
	<tr>
		<td><?php echo $categoriapersona['CategoriaPersona']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($categoriapersona['CategoriaPersona']['nombre'], array('controller' => 'categoriapersonas', 'action' => 'view', $categoriapersona['CategoriaPersona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $categoriapersona['CategoriaPersona']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $categoriapersona['CategoriaPersona']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($categoriapersona); ?>
</table>