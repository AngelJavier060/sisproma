<?php
/** @var UsuarioController $this */
/** @var Usuario $model */
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Usuario::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Usuario::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Usuario::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<!--     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php //echo CHtml::encode($model->getAttributeLabel('capacidad')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php //echo CHtml::encode($model->Capacidad); ?>
                            </td>
                    </tr>
                </tbody>
</table>-->
    
     <table class="table table-striped table-bordered">    
     <thead>
         <tr>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('username')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('tipo')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('nombre_completo')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('direccion')); ?>
            </th>
            <th>      
                                    <?php echo CHtml::encode($model->getAttributeLabel('telefono')); ?>
            </th>
               
         </tr>
     </thead>
                <tbody>
                    <tr>
                            <td>      
                                    <?php echo CHtml::encode($model->username); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->tipo); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->nombre_completo); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->direccion); ?>
                            </td>
                             <td>      
                                    <?php echo CHtml::encode($model->telefono); ?>
                            </td>
                            
                    </tr>
                </tbody>
</table>
    
<?php 
//$this->widget('bootstrap.widgets.TbDetailView',array(
//	'data' => $model,
//	'attributes' => array(
//        'id',
//        'username',
//        'password',
//        'tipo',
//        'nombre_completo',
//        'direccion',
//        'telefono',
//        'estado',
//        'id_referencia',
//	),
//)); 
?>
</fieldset>