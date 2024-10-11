<div class="form">
    <?php
    /** @var TbPMPSemanalController $this */
    /** @var TbPMPSemanal $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-pmpsemanal-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
    <div class="form-horizontal">
                        <?php //echo $form->textFieldRow($model, 'id_Produccion', array('class' => 'span1')) ?>
    <div class="column">
                        <?php echo $form->dropDownListRow($model, 'id_Produccion', CHtml::listData(TbProduccion::model()->findAll(), 'id_Produccion', TbProduccion::representingColumn())) ?>
        </div>
    <div class="column">
                        <?php //echo $form->textFieldRow($model, 'Mes', array('class' => 'span1', 'maxlength' => 20)) ?>
                       <?php echo $form->dropDownListRow($model, 'Mes' , 
                               array('Enero' => 'Enero', 
                                   'Febrero' => 'Febrero', 
                                   'Marzo' => 'Marzo',
                                   'Abril' => 'Abril',
                                   'Mayo' => 'Mayo',
                                   'Junio' => 'Junio',
                                   'Julio' => 'Julio',
                                   'Agosto' => 'Agosto',
                                   'Septiembre' => 'Septiembre',
                                   'Octubre' => 'Octubre',
                                   'Noviembre' => 'Noviembre',
                                   'Diciembre' => 'Diciembre',
                                   
                                   ) , array('class' => 'span1', 'maxlength' => 20)) ?>    
                </div>
    <div class="column">
                        <?php echo $form->textFieldRow($model, 'S1', array('class' => 'span1')) ?>
                </div>
    <div class="column">
                        <?php echo $form->textFieldRow($model, 'S2', array('class' => 'span1')) ?>
                </div>
    <div class="column">
                        <?php echo $form->textFieldRow($model, 'S3', array('class' => 'span1')) ?>
                </div>
    <div class="column">
                        <?php echo $form->textFieldRow($model, 'S4', array('class' => 'span1')) ?>
                </div>
<!--    <div class="span-4">
                        <?php // echo $form->textFieldRow($model, 'Total_Produccion', array('class' => 'span1')) ?>
                </div>-->
<!--    <div class="column">
                        <?php // echo $form->textFieldRow($model, 'Estandar_Produccion', array('class' => 'span1')) ?>
                </div>-->
<!--    <div class="column">
                        <?php // echo $form->textFieldRow($model, 'Porcentaje', array('class' => 'span1')) ?>
                </div>-->
<!--    <div class="column">
                        <?php //echo $form->textFieldRow($model, 'Produciendo_Planta', array('class' => 'span1')) ?>
                </div>-->
    </div>
                <div class="span-20">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
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