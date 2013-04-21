<?php

/**
 * This is the model class for table "production".
 *
 * The followings are the available columns in table 'production':
 * @property integer $id
 * @property string $no_of_eggs
 * @property string $kgs_of_feed
 * @property string $chicken_sold
 * @property string $eggs_sold
 * @property string $price_per_egg
 * @property string $production_date
 */
class Production extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Production the static model class
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
		return 'production';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_of_eggs, kgs_of_feed, chicken_sold, eggs_sold, price_per_egg, production_date', 'required'),
			array('no_of_eggs, kgs_of_feed, chicken_sold, eggs_sold, price_per_egg', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, no_of_eggs, kgs_of_feed, chicken_sold, eggs_sold, price_per_egg, production_date', 'safe', 'on'=>'search'),
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
			'no_of_eggs' => 'No Of Eggs',
			'kgs_of_feed' => 'Kgs Of Feed',
			'chicken_sold' => 'Chicken Sold',
			'eggs_sold' => 'Eggs Sold',
			'price_per_egg' => 'Price Per Egg',
			'production_date' => 'Production Date',
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
		$criteria->compare('no_of_eggs',$this->no_of_eggs,true);
		$criteria->compare('kgs_of_feed',$this->kgs_of_feed,true);
		$criteria->compare('chicken_sold',$this->chicken_sold,true);
		$criteria->compare('eggs_sold',$this->eggs_sold,true);
		$criteria->compare('price_per_egg',$this->price_per_egg,true);
		$criteria->compare('production_date',$this->production_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}