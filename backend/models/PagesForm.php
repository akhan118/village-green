<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class PagesForm extends Model
{
    public $menu_name;




    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['menu_name', 'trim'],
            ['menu_name','memu_submenu_true' 'required'],


        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function SaveMenu()
    {
        if (!$this->validate()) {
            return null;
        }

        return "Save";
    }
}
