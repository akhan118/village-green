<?php
namespace backend\models;
use yii\base\Model;
use app\models\Pages;

/**
 * Signup form
 */
class PagesForm extends Model
{
    public $page_html;
    public $menu_id;
    public $submenu_id;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['page_html','required'],
            ['menu_id','required'],
            ['submenu_id','trim'],

        ];
    }

    /**
     *
     */
    public function SavePages()
    {
      if ($this->validate()) {
          $form=new Pages();
          $form->menu_id = $this->menu_id;
          $form->submenu_id = $this->submenu_id;
          $form->page_html = $this->page_html;
          $form->save();

          //var_dump("True Save Page");
          //var_dump($this);

          return true;

      }else{

        return false;
      }
    }

}
