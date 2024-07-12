<?php
$this->breadcrumbs=array(
    'Patients',
);
?>

<h1>Patients</h1>

<p>
    <?php echo CHtml::link('Create New Patient', array('create'), array('class'=>'btn btn-primary')); ?>
</p>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    <?php foreach($patients as $patient): ?>
        <tr>
            <td><?php echo $patient->id; ?></td>
            <td><?php echo CHtml::encode($patient->name); ?></td>
            <td><?php echo CHtml::encode($patient->age); ?></td>
            <td><?php echo CHtml::encode($patient->address); ?></td>
            <td>
                <?php echo CHtml::link('View', array('view', 'id'=>$patient->id)); ?> |
                <?php echo CHtml::link('Update', array('update', 'id'=>$patient->id)); ?> |
                <?php echo CHtml::link('Delete', array('delete', 'id'=>$patient->id), array('confirm'=>'Are you sure?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
