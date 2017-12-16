<?php
namespace backend\models;

use yii\base\Model;
use backend\models\Submenus;


/**
 * Signup form
 */
class SubMenuForm extends Model
{
    public $submenu_name;
    public $menu_id;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['submenu_name', 'trim'],
        ];
    }


         public function SaveSubMenu()
    {
      if ($this->validate()) {
          $form=new Submenus();
var_dump($this->submenu_name);
var_dump($this->menu_id);

          $form->submenu_name = $this->submenu_name;
          $form->menu_id = $this->menu_id;
          $form->save();
          var_dump();

          return true;

      }else{
        echo "false";
        return false;
      }


    }

    public function attributeLabels()
    {
        return [
            'menu_name' => 'Select Menu Name',
            'submenu_name' => 'Enter Submenu Name',
        ];
    }
}
