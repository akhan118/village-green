<?php
namespace backend\models;
/**
 * This is the model class for table "products".
 *use yii\base\Model;
* @property string $menu_name
* @property integer $menu_submenu_true
* @property string $$menu_order
*
* @property submenu[]
*
**/
/**
 * menu
 */
class MenuForm extends \yii\db\ActiveRecord
{
  /**
   * @inheritdoc
   */
public static function tableName()
{

  return 'menu';
}

    public $menu_name;
    public $menu_submenu_true;
    public $menu_order;
    public $submenu_name;
    public $picture_path;
    public $text_field;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['menu_name', 'required'],
            ['menu_submenu_true', 'required'],
            ['menu_order', 'required']


        ];

    }
    public function SaveMenu()
    {
        if ($this->validate()) {
            $form=new Form();
            $form->menu_name = $this->menu_name;
            $form->menu_submenu_true = $this->menu_submenu_true;
            $form->menu_order = $this->menu_order;
            $form->save();

            echo "True SaveMenu";
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
