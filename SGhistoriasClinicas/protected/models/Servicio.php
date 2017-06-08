<?php

/**
 * This is the model class for table "servicio".
 *
 * The followings are the available columns in table 'servicio':
 * @property integer $id_servicio
 * @property string $descripcion
 * @property double $costo
 *
 * The followings are the available model relations:
 * @property Seguimiento[] $seguimientos
 */
class Servicio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Servicio the static model class
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
		return 'servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_servicio, descripcion, costo', 'required'),
			array('id_servicio', 'numerical', 'integerOnly'=>true),
			array('costo', 'numerical'),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_servicio, descripcion, costo', 'safe', 'on'=>'search'),
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
			'seguimientos' => array(self::HAS_MANY, 'Seguimiento', 'id_servicio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_servicio' => 'Id Servicio',
			'descripcion' => 'Descripcion',
			'costo' => 'Costo',
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

		$criteria->compare('id_servicio',$this->id_servicio);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('costo',$this->costo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}