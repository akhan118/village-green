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
            [['submenu_name','menu_id'], 'trim'],
        ];
    }


         public function SaveSubMenu()
    {
      if ($this->validate()) {
          $form=new Submenus();

          $form->menu_id = $this->menu_id;
          $form->submenu_name = $this->submenu_name;

          $form->save();
          // var_dump($form->save());
          return true;

      }else{

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
