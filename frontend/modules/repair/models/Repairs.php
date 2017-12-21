<?php

namespace frontend\modules\repair\models;

use Yii;

/**
 * This is the model class for table "repairs".
 *
 * @property integer $id
 * @property integer $department_id
 * @property string $datenotuse
 * @property integer $tool_id
 * @property string $number
 * @property string $problem
 * @property string $stage
 * @property string $startdate
 * @property string $satatus
 * @property string $dateplan
 * @property string $remark
 * @property string $answer
 * @property string $enddate
 * @property integer $user_id
 * @property integer $confirm
 * @property string $confirm_detail
 * @property string $createDate
 * @property string $updateDate
 */
class Repairs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repairs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'problem', 'user_id'], 'required'],
            [['department_id', 'tool_id', 'user_id', 'confirm'], 'integer'],
            [['datenotuse', 'startdate', 'dateplan', 'enddate', 'createDate', 'updateDate'], 'safe'],
            [['problem', 'stage', 'satatus', 'remark', 'answer'], 'string'],
            [['number'], 'string', 'max' => 30],
            [['confirm_detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'ฝ่าย/งาน',
            'datenotuse' => 'วันที่อุปกรณ์เสีย',
            'tool_id' => 'อุปกรณ์',
            'number' => 'เลขครุภัณฑ์',
            'problem' => 'ปัญหาที่ซ่อม',
            'stage' => 'ระยะรอคอย',
            'startdate' => 'วันที่รับซ่อม',
            'satatus' => 'สถานะการแจ้ง',
            'dateplan' => 'กำหนดเสร็จภายในวันที่',
            'remark' => 'ช่างอธิบาย',
            'answer' => 'ช่างสรุปงาน',
            'enddate' => 'วันซ่อมเสร็จ',
            'user_id' => 'ผู้บันทึก',
            'confirm' => 'การอนุมัติ',
            'confirm_detail' => 'การมอบหมายงานซ่อม',
            'createDate' => 'วันส่งซ่อม',
            'updateDate' => 'Update Date',
        ];
    }
    public function getDep(){
        return $this->hasOne(Departments::className(), ['id'=>'department_id']);
    }
    public function getRetool(){
        return $this->hasOne(Tools::className(), ['id'=>'tool_id']);
    }
}