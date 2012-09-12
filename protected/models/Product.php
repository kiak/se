<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $id
 * @property string $name
 * @property string $desc
 * @property integer $price_cash
 * @property integer $price_point
 * @property integer $point_earn
 * @property integer $quantity
 * @property string $picture_path
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public $layout = 'column2';
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function limit(){

	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, desc, price_cash, price_point, point_earn, quantity', 'required'),
			array('price_cash, price_point, point_earn, quantity', 'numerical', 'integerOnly'=>true),
			array('name, picture_path', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, desc, price_cash, price_point, point_earn, quantity, picture_path', 'safe', 'on'=>'search'),
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
			'name' => 'ชื่อสินค้า',
			'desc' => 'รายละเอียดสินค้า',
			'price_cash' => 'ราคา (เงินสด)',
			'price_point' => 'ราคา (แต้ม)',
			'point_earn' => 'ได้แต้ม',
			'quantity' => 'จำนวนสินค้าคงคลัง',
			'picture_path' => 'ไฟล์รูป',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('price_cash',$this->price_cash);
		$criteria->compare('price_point',$this->price_point);
		$criteria->compare('point_earn',$this->point_earn);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('picture_path',$this->picture_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}