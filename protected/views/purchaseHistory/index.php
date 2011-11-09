<?php
$this->breadcrumbs=array(
	'Purchase Histories',
);

$this->menu=array(
	array('label'=>'Create PurchaseHistory', 'url'=>array('create')),
	array('label'=>'Manage PurchaseHistory', 'url'=>array('admin')),
);
?>

<h1>Purchase Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
