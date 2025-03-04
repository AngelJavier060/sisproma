<?php

Yii::import('application.models._base.BaseTbConsumoEnergia');

class TbConsumoEnergia extends BaseTbConsumoEnergia
{
    /**
     * @return TbConsumoEnergia
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Consumo de Energia|Consumos de Energia', $n);
    }

}