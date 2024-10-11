<?php

Yii::import('application.models._base.BaseTbPersonal');

class TbPersonal extends BaseTbPersonal
{
    /**
     * @return TbPersonal
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Personal|Personal', $n);
    }

}