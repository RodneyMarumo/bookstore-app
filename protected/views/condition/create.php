<?php
$this->breadcrumbs=array(
	'Conditions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Books Conditions', 'url'=>array('index')),
	array('label'=>'Manage Books Conditions', 'url'=>array('admin')),
);
?>

<h1>Create Condition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>