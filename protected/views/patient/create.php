<?php
$this->breadcrumbs=array(
    'Patients'=>array('index'),
    'Create',
);
?>

<h1>Create Patient</h1>

<?php echo $this->renderPartial('_form', array('patient'=>$patient)); ?>
