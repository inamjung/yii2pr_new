<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $name
 * @property string $addr
 * @property integer $t
 * @property integer $a
 * @property integer $c
 * @property string $p
 * @property string $tel
 * @property string $department_id
 * @property string $d_create
 * @property string $d_update
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t', 'a', 'c'], 'integer'],
            [['d_create', 'd_update'], 'safe'],
            [['name'], 'string', 'max' => 150],
            [['addr'], 'string', 'max' => 100],
            [['p', 'tel', 'department_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ - สกุล',
            'addr' => 'ที่อยู่ ',
            't' => 'ตำบล',
            'a' => 'อำเภอ',
            'c' => 'จังหวัด',
            'p' => 'รหัสไปรษณย์',
            'tel' => 'โทรศัพท์',
            'department_id' => 'แผนก',
            'd_create' => 'D Create',
            'd_update' => 'D Update',
        ];
    }
    public function getChws(){
        return $this->hasOne(Chw::className(), ['id'=>'c']);
    }
    public function getAmps(){
        return $this->hasOne(Amp::className(), ['id'=>'a']);
    }
    public function getTmbs(){
        return $this->hasOne(Tmb::className(), ['id'=>'t']);
    }
    
    public function getDep(){
        return $this->hasOne(Departments::className(), ['id'=>'department_id']);
    }
}
