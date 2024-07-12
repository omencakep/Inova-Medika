<?php

/**
 * This is the model class for table "tindakan".
 *
 * The followings are the available columns in table 'tindakan':
 * @property integer $id
 * @property integer $pasien_id
 * @property string $nama_pasien
 * @property string $keluhan
 * @property string $diagnosa
 * @property string $tindakan
 *
 * @property Patient $pasien
 */
class Tindakan extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tindakan';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('pasien_id, nama_pasien', 'required'),
            array('pasien_id', 'numerical', 'integerOnly'=>true),
            array('nama_pasien', 'length', 'max'=>255),
            array('keluhan, diagnosa, tindakan', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'pasien' => array(self::BELONGS_TO, 'Pasien', 'pasien_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'pasien_id' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'keluhan' => 'Keluhan',
            'diagnosa' => 'Diagnosa',
            'tindakan' => 'Tindakan',
        );
    }
}
