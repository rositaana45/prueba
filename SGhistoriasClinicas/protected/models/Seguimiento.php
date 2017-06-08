<?php

/**
 * This is the model class for table "seguimiento".
 *
 * The followings are the available columns in table 'seguimiento':
 * @property integer $nro_seguimiento
 * @property string $fecha
 * @property integer $id_servicio
 * @property integer $id_doctor
 *
 * The followings are the available model relations:
 * @property Odontograma[] $odontogramas
 * @property Doctor $idDoctor
 * @property Servicio $idServicio
 */
class Seguimiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Seguimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seguimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nro_seguimiento, fecha, id_servicio, id_doctor', 'required'),
			array('nro_seguimiento, id_servicio, id_doctor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nro_seguimiento, fecha, id_servicio, id_doctor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'odontogramas' => array(self::HAS_MANY, 'Odontograma', 'nro_seguimiento'),
			'idDoctor' => array(self::BELONGS_TO, 'Doctor', 'id_doctor'),
			'idServicio' => array(self::BELONGS_TO, 'Servicio', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nro_seguimiento' => 'Nro Seguimiento',
			'fecha' => 'Fecha',
			'id_servicio' => 'Id Servicio',
			'id_doctor' => 'Id Doctor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nro_seguimiento',$this->nro_seguimiento);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('id_doctor',$this->id_doctor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}