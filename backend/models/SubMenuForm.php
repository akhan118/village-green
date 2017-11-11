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
    public $menu_name;
    public $menu_id;
    public $menu_order;
    public $more;
    public $visible_or_invisible;

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
      if ($this->validate()) {
          $form=new Submenu();
          $form->submenu_name = $this->submenu_name;
          $form->visible_or_invisible = $this->visible_or_invisible;
          $form->menu_id = $this->menu_id;
          $form->save();

          var_dump("True SaveMenu");
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
            'visible_or_invisible' => 'Do have additional Submenus?',
        ];
    }
}
