<h2>Lista de meseros</h2>
<br>
<?php echo $this->Html->link('Crear',array('controller'=>'meseros','action'=>'nuevo')); ?>

<br>
<br>
<table>

	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalles</td>
		<td>Edicion</td>
		<td>Borrar</td>

	</tr>
<?php foreach ($meseros as $mesero): ?> 
		<tr>
			<td><?php echo $mesero['Mesero']['id']; ?></td>
			<td><?php echo $mesero['Mesero']['nombre']; ?></td>
			<td><?php echo $mesero['Mesero']['apellido']; ?></td>
			<td><?php echo $this->Html->link('Detalle',array('controller'=>'meseros','action'=>'ver', $mesero['Mesero']['id'])); ?></td>
			<td><?php echo $this->Html->link('Editar',array('controller'=>'meseros','action'=>'editar', $mesero['Mesero']['id'])); ?></td>
			<td><?php echo $this->Form->postLink('Eliminar', array('action'=>'eliminar', $mesero['Mesero']['id']), ['confirm' => 'Estas seguro que deseas elimiar a '.$mesero['Mesero']['nombre'].' '.$mesero['Mesero']['apellido'].'?']); ?></td>
		</tr>
<!--,array('confirm'=>'Eliminar a'.$mesero['Mesero']['nombre'].'?')-->
	<?php endforeach; ?> 
</table>

