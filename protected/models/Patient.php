<?php

/**
 * This is the model class for table "patients".
 *
 * The followings are the available columns in table 'patients':
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $address
 */
class Patient extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'patient';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('name, age, address', 'required'),
            array('age', 'numerical', 'integerOnly'=>true),
            array('name', 'length', 'max'=>255),
            array('address', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // Define relations if needed
        return array(
            // Example relation:
            // 'relationName' => array(self::HAS_MANY, 'RelatedModel', 'foreign_key'),
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
            'age' => 'Age',
            'address' => 'Address',
        );
    }
}
