<?php
$this->breadcrumbs=array(
	'Purchase Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchaseHistory', 'url'=>array('index')),
	array('label'=>'Manage PurchaseHistory', 'url'=>array('admin')),
);
?>

<h1>Create PurchaseHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>