<?php
/** @var TbMaquinariaEquipoController $this */
/** @var TbMaquinariaEquipo $data */
?>
<!--<div class="view">-->
      <!--<div class="table-responsive">-->
        <table class="table table-striped table-bordered">                  
                <tbody>
                    <tr>
                        <td style="width:300px">
                             <?php if (!empty($data->Maquinaria_o_Equipo)): ?>
                            <div class="field">
                                <div class="field_name">
                                    <b><?php //echo CHtml::encode($data->getAttributeLabel('Maquinaria_o_Equipo')); ?></b>
                                </div>
                                <div class="field_value">
                                    <?php echo CHtml::encode($data->Maquinaria_o_Equipo); ?>
                                </div>
                            </div>
                             <?php endif; ?>
                        </td>
                        <td style="width:50px">
                             <?php if (!empty($data->Cantidad)): ?>
                                <div class="field">
                                <div class="field_name">
                                    <b><?php //echo CHtml::encode($data->getAttributeLabel('Cantidad')); ?></b>
                                </div>
                                <div class="field_value">
                                    <?php echo CHtml::encode($data->Cantidad); ?>
                                </div>
                            </div>

                            <?php endif; ?>
                        </td>
                        <td style="width:100px">
                              <?php if (!empty($data->Precio_Unitario)): ?>
                                <div class="field">
                                    <div class="field_name">
                                        <b><?php //echo CHtml::encode($data->getAttributeLabel('Precio_Unitario')); ?></b>
                                    </div>
                                    <div class="field_value">
                                        <?php echo CHtml::encode($data->Precio_Unitario); ?>
                                    </div>
                                </div>

                                <?php endif; ?>
                        </td>
                        <td style="width:100px">
                             <?php if (!empty($data->Total)): ?>
                                <div class="field">
                                    <div class="field_name">
                                        <b><?php //echo CHtml::encode($data->getAttributeLabel('Total')); ?></b>
                                    </div>
                                    <div class="field_value">
                                        <?php echo CHtml::encode($data->Total); ?>
                                        
                                        
                                                  <?php
                                                    $sum=Yii::app()->getSession()->get('Suma_TbMaquinariaEquipo')+CHtml::encode($data->Total);
                                                    Yii::app()->getSession()->add('Suma_TbMaquinariaEquipo', $sum);
                                                    ?> 
                                        
                                        
                                    </div>
                                </div>

                                <?php endif; ?>
                        </td>  
                    </tr>
                </tbody>
        </table>
      <!--</div>-->
  
    <!--</div>-->
