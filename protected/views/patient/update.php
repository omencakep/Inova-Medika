<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    $patient->name=>array('view','id'=>$patient->id),
    'Update',
);
?>

<h1>Update Patient <?php echo $patient->id; ?></h1>

<?php echo $this->renderPartial('_form', array('patient'=>$patient)); ?>
