<?php
/** @var ProductoController $this */
/** @var Producto $model */
$this->breadcrumbs = array(
	'Productos',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Producto::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo Producto::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'producto-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'categoria_id',
                    'value' => 'isset($data->categoria) ? $data->categoria : null',
                    'filter' => CHtml::listData(Categoria::model()->findAll(), 'id', Categoria::representingColumn()),
                ),
        'nombre',
        'marca',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view}' //removed {update} {delete}
		),
	),
)); ?>

<?php 
/* sustituido
	$this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); 
*/
?>
</fieldset>