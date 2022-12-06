<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "convocatorias".
 *
 * @property int $id
 * @property string $Convocatoria
 * @property string $Archivo
 */
class Convocatorias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'convocatorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Convocatoria', 'Archivo'], 'required'],
            [['Convocatoria', 'Archivo'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Convocatoria' => Yii::t('app', 'Convocatoria'),
            'Archivo' => Yii::t('app', 'Archivo'),
        ];
    }
}
