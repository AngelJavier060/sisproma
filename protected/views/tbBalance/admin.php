<?php
/** @var TbBalanceController $this */
/** @var TbBalance $model */
$this->breadcrumbs=array(
	'Tb Balances'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);
 
//$this->menu=array(
//	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TbBalance::label(2), 'icon' => 'list', 'url' => array('index')),
//	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TbBalance::label(), 'icon' => 'plus', 'url' => array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-balance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TbBalance::label(2) ?>    </legend>

<?php //echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tb-balance-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id_Balance',
        'Producto',
        'Capacidad_maquina',
        'Paradas',
        'Dias_al_mes',
        'Malanga_pesada_Kg',
        'Malanga_pesada_pP',
        'Malanga_pesada_pKg',
        'Lavado_y_pelado_Kg',
        'Lavado_y_pelado_pP',
        'Lavado_y_pelado_pKg',
        'Rebanado_Kg',
        'Rebanado_pP',
        'Rebanado_pKg',
        'Freir_Kg',
        'Freir_pP',
        'Freir_pKg',
        'Enfriar_Kg',
        'Enfriar_pP',
        'Enfriar_pKg',
        'Condimentar_kg',
        'Condimentar_pP',
        'Condimentar_pKg',
        'Empacar_Kg',
        'Empacar_pP',
        'Empacar_pKg',
        'Almacenar_Kg',
        'Almacenar_pP',
        'Total_Kg',
        'Total_pP',
        'Total_pKg',
        
//		array(
//			'class'=>'bootstrap.widgets.TbButtonColumn',
//		),
	),
)); ?>
</fieldset>