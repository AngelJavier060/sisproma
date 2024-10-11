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
  
                            <?php echo $form->textFieldRow($model, 'Producto', array('disabled'=>true, 'class' => 'span1', 'maxlength' => 100)) ?>
                        <?php echo $form->textFieldRow($model, 'Capacidad_maquina', array('class' => 'span1')) ?>
                        <?php echo $form->textFieldRow($model, 'Paradas', array('class' => 'span1')) ?>
                        <?php echo $form->textFieldRow($model, 'Dias_al_mes', array('class' => 'span1')) ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Balance de producción</th>
                <th>Kg</th>
                <th>% perdido</th>
                <th>Kg Perdidos</th>
            </tr>
        </thead>        
            <tbody>
                <tr>
                    <td><b>1</b></td>
                    <td>
                        Malanga Pesada
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Malanga_pesada_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                     </td>
                    <td>
                         <?php echo $form->textField($model, 'Malanga_pesada_pP', array('class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Malanga_pesada_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>2</b></td>
                    <td>
                        Lavado y Pelada
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Lavado_y_pelado_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Lavado_y_pelado_pP', array('class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Lavado_y_pelado_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>3</b></td>
                    <td>
                        Rebanado
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Rebanado_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Rebanado_pP', array('class' => 'span1')) ?>
                     
                    </td>
                    <td>
                           <?php echo $form->textField($model, 'Rebanado_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>4</b></td>
                    <td>
                        Freír
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Freir_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Freir_pP', array('class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Freir_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                </tr>
                 <tr>
                    <td><b>5</b></td>
                    <td>
                        Enfriar
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Enfriar_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Enfriar_pP', array('class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Enfriar_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>6</b></td>
                    <td>
                        Añadir Condimentos
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Condimentar_kg', array('disabled'=>true, 'class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Condimentar_pP', array('class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Condimentar_pKg', array('disabled'=>true, 'class' => 'span1', 'maxlength' => 45)) ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>7</b></td>
                    <td>
                        Empacar
                    </td>
                    <td>
                         <?php  echo $form->textField($model, 'Empacar_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Empacar_pP', array('class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Empacar_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                       
                    </td>
                </tr>
                 <tr>
                    <td><b>8</b></td>
                    <td>
                        Almacenar
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Almacenar_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                    <td>
                          <?php echo $form->textField($model, 'Almacenar_pP', array('class' => 'span1')) ?>
                       
                    </td>
                    <td>
                         <?php echo $form->textField($model, 'Almacenar_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                      
                    </td>
                </tr>
                 <tr>
                     <td colspan ="2"><b>TOTAL</b></td>
                    
                    <td>
                             <?php echo $form->textField($model, 'Total_Kg', array('disabled'=>true, 'class' => 'span1')) ?>
                   
                    </td>
                    <td>
                             <?php echo $form->textField($model, 'Total_pP', array('disabled'=>true, 'class' => 'span1')) ?>
                   
                    </td>
                    <td>
                             <?php echo $form->textField($model, 'Total_pKg', array('disabled'=>true, 'class' => 'span1')) ?>
                   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

                       
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