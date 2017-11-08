<?php
namespace backend\models;

use yii\base\Model;


/**
 * Signup form
 */
class SubMenuForm extends Model
{
    public $submenu_name;
    public $picture_path;
    public $text_field;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['submenu_name', 'trim'],
            ['picture_path', 'trim'],
            ['text_field', 'trim']
        ];
    }


         public function SaveSubMenu()
    {
        if (!$this->validate()) {
            return null;
        }

        return "Save";
    }

    public function attributeLabels()
    {
        return [
            'submenu_name' => 'Enter Submenu Name',
            'picture_path' => 'Enter Path for picture',
            'text_field' => 'Enter free text',
        ];
    }
}
