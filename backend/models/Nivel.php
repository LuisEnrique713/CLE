<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nivel".
 *
 * @property int $id
 * @property string $Nombre_Mcer
 *
 * @property Inscripcion[] $inscripcions
 */
class Nivel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nivel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre_Mcer'], 'required'],
            [['Nombre_Mcer'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Nombre_Mcer' => Yii::t('app', 'Nombre Mcer'),
        ];
    }

    /**
     * Gets query for [[Inscripcions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcions()
    {
        return $this->hasMany(Inscripcion::class, ['nivel_id' => 'id']);
    }
}
