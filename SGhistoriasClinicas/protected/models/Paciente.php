<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id_paciente
 * @property string $nombre
 * @property string $sexo
 * @property integer $edad
 * @property integer $telefono
 * @property integer $id_doctor
 * @property integer $nro_historia
 *
 * The followings are the available model relations:
 * @property Doctor $idDoctor
 * @property Historia $nroHistoria
 */
class Paciente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paciente the static model class
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
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_paciente, nombre, sexo, edad, telefono, id_doctor, nro_historia', 'required'),
			array('id_paciente, edad, telefono, id_doctor, nro_historia', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('sexo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_paciente, nombre, sexo, edad, telefono, id_doctor, nro_historia', 'safe', 'on'=>'search'),
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
			'idDoctor' => array(self::BELONGS_TO, 'Doctor', 'id_doctor'),
			'nroHistoria' => array(self::BELONGS_TO, 'Historia', 'nro_historia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_paciente' => 'Id Paciente',
			'nombre' => 'Nombre',
			'sexo' => 'Sexo',
			'edad' => 'Edad',
			'telefono' => 'Telefono',
			'id_doctor' => 'Id Doctor',
			'nro_historia' => 'Nro Historia',
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

		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('id_doctor',$this->id_doctor);
		$criteria->compare('nro_historia',$this->nro_historia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}