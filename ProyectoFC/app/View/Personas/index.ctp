<!-- File: /app/View/Personas/index.ctp -->
<h1>Personas</h1>
<table>
	<?php echo $this->Html->link('Agregar Persona', array('controller' => 'personas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Direccion</th>
		<th>Email</th>
		<th>Telefono</th>
		<th>CUIT</th>
		<th>Especialidad</th>
		<th>Titulo</th>
		<th>Ciudad</th>
		<th>Provincia</th>
		<th>Acciones</th>
		   
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo $persona['Persona']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['dni'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['nombre'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['apellido'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['direccion'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['email'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['telefono'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['cuit'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['especialidad'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['titulo'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['ciudad_id'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['provincia_id'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>


	
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $persona['Persona']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $persona['Persona']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($persona); ?>
</table>