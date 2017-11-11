<?php
namespace backend\models;
use yii\base\Model;
use backend\models\Menu;


class MenuForm extends Model
{

    public $menu_name;
    public $menu_submenu_true;
    public $menu_order;

    public function rules()
    {
        return [
            ['menu_name', 'required'],
            ['menu_submenu_true', 'required'],
            ['menu_order', 'required'],


        ];

    }
    public function SaveMenu()
    {
        if ($this->validate()) {
            $form=new Menu();
            $form->menu_name = $this->menu_name;
            $form->menu_submenu_true = $this->menu_submenu_true;
            $form->menu_order = $this->menu_order;
            $form->save();

            var_dump("True SaveMenu");
            return true;

        }else{
          echo "false";
          return false;
        }


    }
    /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
      return [
          'menu_name' => 'Enter Menu Name',
          'menu_submenu_true' => 'Do you have a  Submenu?',
          'menu_order' => 'Select Menu Order',
      ];
  }
}
