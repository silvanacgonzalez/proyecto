<!-- File: /app/View/ConveniosMarcos/index.ctp -->
<h1>Convenio Marco</h1>
<table>
	<?php echo $this->Html->link('Agregar Convenio Marco', array('controller' => 'conveniomarcos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($conveniomarcos as $conveniomarco): ?>
	<tr>
		<td><?php echo $conveniomarco['ConvenioMarco']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($conveniomarco['ConvenioMarco']['fecha_creacion'], array('controller' => 'conveniomarcos', 'action' => 'view', $conveniomarco['ConvenioMarco']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $conveniomarco['ConvenioMarco']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $conveniomarco['ConvenioMarco']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($conveniomarco); ?>
</table>