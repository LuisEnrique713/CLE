<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property int $id
 * @property string $Matricula
 * @property string $Nombre_Estudiante
 * @property string $Genero
 * @property string $Fecha_De_Nacimiento
 * @property string $Correo
 * @property string $Telefono
 * @property string $Lugar_De_Origen
 * @property string $Grupo_Etnico
 * @property string $Porcentaje_Idioma
 * @property int $user_id
 * @property int $curso_id
 *
 * @property Calificaciones[] $calificaciones
 * @property Curso $curso
 * @property Inscripcion[] $inscripcions
 * @property User $user
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Matricula', 'Nombre_Estudiante', 'Genero', 'Fecha_De_Nacimiento', 'Correo', 'Telefono', 'Lugar_De_Origen', 'Grupo_Etnico', 'Porcentaje_Idioma', 'user_id', 'curso_id'], 'required'],
            [['Genero'], 'string'],
            [['Fecha_De_Nacimiento'], 'safe'],
            [['user_id', 'curso_id'], 'integer'],

            [['Matricula', 'Nombre_Estudiante', 'Correo', 'Telefono'], 'string', 'max' => 45],

            [['Lugar_De_Origen', 'Grupo_Etnico', 'Porcentaje_Idioma'], 'string'],

            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['curso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curso::class, 'targetAttribute' => ['curso_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Matricula' => Yii::t('app', 'Matrícula'),
            'Nombre_Estudiante' => Yii::t('app', 'Nombre Del Estudiante'),
            'Genero' => Yii::t('app', 'Género'),
            'Fecha_De_Nacimiento' => Yii::t('app', 'Fecha De Nacimiento'),
            'Correo' => Yii::t('app', 'Correo'),
            'Telefono' => Yii::t('app', 'Teléfono'),
            'Lugar_De_Origen' => Yii::t('app', 'Lugar De Origen'),
            'Grupo_Etnico' => Yii::t('app', 'Grupo Etnico Al Que Perteneces'),
            'Porcentaje_Idioma' => Yii::t('app', 'Porcentaje De Idioma Etnico Que Habla'),
            'user_id' => Yii::t('app', 'Matrícula o Usuario Con El Que Se Registro'),
            'curso_id' => Yii::t('app', 'Módulo de inglés'),
        ];
    }

    /**
     * Gets query for [[Calificaciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificaciones()
    {
        return $this->hasMany(Calificaciones::class, ['perfil_id' => 'id']);
    }

    /**
     * Gets query for [[Curso]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurso()
    {
        return $this->hasOne(Curso::class, ['id' => 'curso_id']);
    }

    /**
     * Gets query for [[Inscripcions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcions()
    {
        return $this->hasMany(Inscripcion::class, ['perfil_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
