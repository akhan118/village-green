<?php

use yii\db\Migration;

class m171021_205740_menu extends Migration
{
    public function up()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%menu}}', [
          'menu_id' => $this->primaryKey(),
          'menu_name' => $this->string(32)->notNull(),
          'menu_submenu_true' => $this->smallInteger()->notNull(),
          'menu_order' => $this->smallInteger()->notNull(),
      ], $tableOptions);
    }

    public function down()
    {
        echo "m171021_205740_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171021_205740_menu cannot be reverted.\n";

        return false;
    }
    */
}
