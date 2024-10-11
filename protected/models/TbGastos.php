<?php

Yii::import('application.models._base.BaseTbGastos');

class TbGastos extends BaseTbGastos
{
    /**
     * @return TbGastos
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Gasto|Gastos', $n);
    }

}