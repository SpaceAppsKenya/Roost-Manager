<?php

/**
 * This is the model class for table "stock".
 *
 * The followings are the available columns in table 'stock':
 * @property integer $id
 * @property string $total_chicken
 * @property string $laying_hens
 * @property integer $chics
 * @property integer $cockrels
 */
class Stock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Stock the static model class
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
		return 'stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_chicken, laying_hens, chics, cockrels', 'required'),
			array('chics, cockrels', 'numerical', 'integerOnly'=>true),
			array('total_chicken, laying_hens', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, total_chicken, laying_hens, chics, cockrels', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'total_chicken' => 'Total Chicken',
			'laying_hens' => 'Laying Hens',
			'chics' => 'Chics',
			'cockrels' => 'Cockrels',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('total_chicken',$this->total_chicken,true);
		$criteria->compare('laying_hens',$this->laying_hens,true);
		$criteria->compare('chics',$this->chics);
		$criteria->compare('cockrels',$this->cockrels);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}