<?php

Yii::import('application.models._base.BaseTbMateriaPrima');

class TbMateriaPrima extends BaseTbMateriaPrima
{
    /**
     * @return TbMateriaPrima
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Materia prima e insumo|Materias primas e insumos', $n);
    }

}