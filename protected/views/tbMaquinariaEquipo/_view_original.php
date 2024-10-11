<?php
/** @var TbMaquinariaEquipoController $this */
/** @var TbMaquinariaEquipo $data */
?>
<div class="view">
                    
        <?php if (!empty($data->Maquinaria_o_Equipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Maquinaria_o_Equipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Maquinaria_o_Equipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Cantidad)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Cantidad); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->Precio_Unitario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Precio_Unitario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Precio_Unitario); ?>
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