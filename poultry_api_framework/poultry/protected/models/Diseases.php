<?php

/**
 * This is the model class for table "diseases".
 *
 * The followings are the available columns in table 'diseases':
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property string $description
 * @property string $symptons
 * @property string $prevention
 * @property string $treatement
 * @property string $photos
 */
class Diseases extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Diseases the static model class
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
		return 'diseases';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, category, description, symptons, prevention, treatement, photos', 'required'),
			array('name, category, photos', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, category, description, symptons, prevention, treatement, photos', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'category' => 'Category',
			'description' => 'Description',
			'symptons' => 'Symptons',
			'prevention' => 'Prevention',
			'treatement' => 'Treatement',
			'photos' => 'Photos',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('symptons',$this->symptons,true);
		$criteria->compare('prevention',$this->prevention,true);
		$criteria->compare('treatement',$this->treatement,true);
		$criteria->compare('photos',$this->photos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}