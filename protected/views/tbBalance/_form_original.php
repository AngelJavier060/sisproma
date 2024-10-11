<div class="form">
    <?php
    /** @var TbBalanceController $this */
    /** @var TbBalance $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tb-balance-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'Producto', array('class' => 'span5', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'Capacidad_maquina', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Paradas', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Dias_al_mes', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Malanga_pesada_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Malanga_pesada_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Malanga_pesada_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Lavado_y_pelado_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Lavado_y_pelado_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Lavado_y_pelado_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Rebanado_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Rebanado_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Rebanado_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Freir_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Freir_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Freir_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Enfriar_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Enfriar_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Enfriar_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Condimentar_kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Condimentar_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Condimentar_pKg', array('class' => 'span5', 'maxlength' => 45)) ?>
                        <?php // echo $form->textFieldRow($model, 'Empacar_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Empacar_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Empacar_pKg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Almacenar_Kg', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'Almacenar_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Total_Kg', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Total_pP', array('class' => 'span5')) ?>
                        <?php //echo $form->textFieldRow($model, 'Total_pKg', array('class' => 'span5')) ?>
                <div class="form-actions"> 
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