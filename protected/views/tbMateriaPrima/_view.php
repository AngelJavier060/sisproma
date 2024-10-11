<?php
/** @var TbMateriaPrimaController $this */
/** @var TbMateriaPrima $data */
?>
<div class="view">
                    
        <?php if (!empty($data->id_Balance)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('id_Balance')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->id_Balance); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Materia_Prima_e_Insumos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Materia_Prima_e_Insumos')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Materia_Prima_e_Insumos); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Capacidad_mes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Capacidad_mes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Capacidad_mes); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Precio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Precio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Total')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Total); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>