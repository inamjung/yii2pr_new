<?php

namespace frontend\modules\repair\models;

use Yii;

/**
 * This is the model class for table "line_bot".
 *
 * @property integer $id
 * @property string $name
 * @property integer $last_id
 */
class LineBot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'line_bot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['last_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'last_id' => 'Last ID',
        ];
    }
}
