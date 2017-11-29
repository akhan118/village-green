<?php

use yii\db\Migration;

/**
 * Class m171126_023105_picture_upload_table
 */
class m171126_023105_picture_upload_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%picture_upload}}' ,[
            
        ])
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171126_023105_picture_upload_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171126_023105_picture_upload_table cannot be reverted.\n";

        return false;
    }
    */
}
