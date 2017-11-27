<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property string $image_name
 * @property string $description
 * @property integer $image_id
 */
class UploadForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'uploadForm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'description'], 'required'],
            [['image_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image_name' => 'Image Name',
            'description' => 'Description',
            'image_id' => 'Image ID',
        ];
    }
}





