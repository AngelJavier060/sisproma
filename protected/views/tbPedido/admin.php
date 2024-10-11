<?php
/** @var TbPedidoController $this */
/** @var TbPedido $model */
$this->breadcrumbs=array(
	'Tb Pedidos'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbPedido::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbPedido::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-pedido-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TbPedido::label(2) ?>    </legend>

<?php //echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<!--<div class="search-form" style="display:none">-->
<?php // $this->renderPartial('_search',array(
	// 'model' => $model,
//)); ?>
<!--</div> search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tb-pedido-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_Pedido',
        array(
                    'name' => 'id_Produccion',
                    'value' => 'isset($data->idProduccion) ? $data->idProduccion : null',
                    'filter' => CHtml::listData(TbProduccion::model()->findAll(), 'id_Produccion', TbProduccion::representingColumn()),
                ),
        array(
                    'name' => 'id_Cliente',
                    'value' => 'isset($data->idCliente) ? $data->idCliente : null',
                    'filter' => CHtml::listData(TbCliente::model()->findAll(), 'id_cliente', TbCliente::representingColumn()),
                ),
        'Cantidad',
        'Fecha_pedido',
        'Fecha_entrega',
        
        'Valor_Total',
        'Estado', 
        
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>