<div class="form">
    <?php
    /** @var TbPedidoController $this */
    /** @var TbPedido $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-pedido-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
    
    <?php if ($model->Estado == 'Pedido') { ?>

                            <?php echo $form->dropDownListRow($model, 'id_Produccion', CHtml::listData(TbProduccion::model()->findAll(), 'id_Produccion', TbProduccion::representingColumn(),'Stock')) ?>
                        <?php echo $form->dropDownListRow($model, 'id_Cliente', CHtml::listData(TbCliente::model()->findAll(), 'id_cliente', TbCliente::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'Cantidad', array('class' => 'span5', 'maxlength' => 45)) ?>
                        <?php // echo $form->datepickerRow($model, 'Fecha_pedido', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php // echo  $form->labelEx($model,'Fecha de pedido:');
//                             $this->widget('zii.widgets.jui.CJuiDatePicker', array(
//                                    'name' => 'Fecha_pedido',
//                                     'model' => $model,
//                                    'attribute' => 'Fecha_pedido',
//                                    'language' => 'es',
//                                    'htmlOptions' => array( 'class' => 'span3'),   //'htmlOptions' => array('readonly' => "readonly", 'class' => 'span3'),
//                                    'options' => array(
//                                        'autoSize' => true,
//                                        'dateFormat' => 'yy-mm-dd',
//                                        'buttonImage' => Yii::app()->baseUrl . '/images/pagina/calendar1.png',
//                                        'buttonImageOnly' => true,
//                                        'buttonText' => 'SELECCIONAR FECHA DE PEDIDO',
//                                        'selectOtherMonths' => true,
//                                        'showAnim' => 'slide',
//                                        'showButtonPanel' => true,
//                                        'showOn' => 'button',
//                                        'showOtherMonths' => true,
//                                        'changeMonth' => 'true',
//                                        'changeYear' => 'true',
//                                    ),
//                                        )
//                                );
                        ?>
                        <?php // echo $form->datepickerRow($model, 'Fecha_entrega', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo  $form->labelEx($model,'Fecha de entrega:');
                             $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                    'name' => 'Fecha_entrega',
                                     'model' => $model,
                                    'attribute' => 'Fecha_entrega',
                                    'language' => 'es',
                                    'htmlOptions' => array( 'class' => 'span3'),   //'htmlOptions' => array('readonly' => "readonly", 'class' => 'span3'),
                                    'options' => array(
                                        'autoSize' => true,
                                        'dateFormat' => 'yy-mm-dd',
                                        'buttonImage' => Yii::app()->baseUrl . '/images/pagina/calendar1.png',
                                        'buttonImageOnly' => true,
                                        'buttonText' => 'SELECCIONAR FECHA DE ENTREGA',
                                        'selectOtherMonths' => true,
                                        'showAnim' => 'slide',
                                        'showButtonPanel' => true,
                                        'showOn' => 'button',
                                        'showOtherMonths' => true,
                                        'changeMonth' => 'true', 
                                        'changeYear' => 'true',
                                    ),
                                        )
                                );
                        ?>
                        <?php // echo $form->textFieldRow($model, 'Valor_Total', array('class' => 'span5')) ?>
                        <?php // echo $form->textFieldRow($model, 'Estado', array('class' => 'span5', 'maxlength' => 45)) ?>
                        <?php echo $form->dropDownListRow($model, 'Estado', array('Entregado' => 'Entregado')) ?>
    <?php }; ?>
    <?php if ($model->Estado == 'Entregado') { ?>

                            <?php echo $form->dropDownListRow($model, 'id_Produccion', CHtml::listData(TbProduccion::model()->findAll(), 'id_Produccion', TbProduccion::representingColumn(),'Stock')) ?>
                        <?php echo $form->dropDownListRow($model, 'id_Cliente', CHtml::listData(TbCliente::model()->findAll(), 'id_cliente', TbCliente::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'Cantidad', array('disabled' =>true, 'class' => 'span5', 'maxlength' => 45)) ?>
                        <?php echo $form->textFieldRow($model, 'Fecha_pedido', array('disabled' =>true, 'class' => 'span5', 'maxlength' => 45)) ?>
                        <?php echo $form->textFieldRow($model, 'Fecha_entrega', array('disabled' =>true, 'class' => 'span5', 'maxlength' => 45)) ?>
                        <?php // echo $form->datepickerRow($model, 'Fecha_pedido', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php 
//                        echo  $form->labelEx($model,'Fecha de pedido:');
//                             $this->widget('zii.widgets.jui.CJuiDatePicker', array(
//                                    'name' => 'Fecha_pedido',
//                                     'model' => $model,
//                                    'attribute' => 'Fecha_pedido',
//                                    'language' => 'es',
//                                    'htmlOptions' => array( 'class' => 'span3'),   //'htmlOptions' => array('readonly' => "readonly", 'class' => 'span3'),
//                                    'options' => array(
//                                        'autoSize' => true,
//                                        'dateFormat' => 'yy-mm-dd',
//                                        'buttonImage' => Yii::app()->baseUrl . '/images/pagina/calendar1.png',
//                                        'buttonImageOnly' => true,
//                                        'buttonText' => 'SELECCIONAR FECHA DE PEDIDO',
//                                        'selectOtherMonths' => true,
//                                        'showAnim' => 'slide',
//                                        'showButtonPanel' => true,
//                                        'showOn' => 'button',
//                                        'showOtherMonths' => true,
//                                        'changeMonth' => 'true',
//                                        'changeYear' => 'true',
//                                    ),
//                                        )
//                                );
                        ?>
                        <?php // echo $form->datepickerRow($model, 'Fecha_entrega', array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php 
//                          echo  $form->labelEx($model,'Fecha de entrega:');
//                             $this->widget('zii.widgets.jui.CJuiDatePicker', array(
//                                    'name' => 'Fecha_entrega',
//                                     'model' => $model,
//                                    'attribute' => 'Fecha_entrega',
//                                    'language' => 'es',
//                                    'htmlOptions' => array( 'class' => 'span3'),   //'htmlOptions' => array('readonly' => "readonly", 'class' => 'span3'),
//                                    'options' => array(
//                                        'autoSize' => true,
//                                        'dateFormat' => 'yy-mm-dd',
//                                        'buttonImage' => Yii::app()->baseUrl . '/images/pagina/calendar1.png',
//                                        'buttonImageOnly' => true,
//                                        'buttonText' => 'SELECCIONAR FECHA DE ENTREGA',
//                                        'selectOtherMonths' => true,
//                                        'showAnim' => 'slide',
//                                        'showButtonPanel' => true,
//                                        'showOn' => 'button',
//                                        'showOtherMonths' => true,
//                                        'changeMonth' => 'true', 
//                                        'changeYear' => 'true',
//                                    ),
//                                        )
//                                );
                        ?>
                        <?php  echo $form->textFieldRow($model, 'Valor_Total', array('disabled' =>true, 'class' => 'span5')) ?>
                        <?php  echo $form->textFieldRow($model, 'Estado', array('disabled' =>true,'class' => 'span5', 'maxlength' => 45)) ?>
                        <?php //echo $form->dropDownListRow($model, 'Estado', array('Pedido' => 'Pedido', 'Entregado' => 'Entregado')) ?>
    <?php }; ?>
    
    
                <div class="form-actions">
                <?php 
                $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>