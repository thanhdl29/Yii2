<?php

use yii\db\Migration;

/**
 * Class m240315_075245_tbl_user
 */
class m240315_075245_tbl_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tbl_user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(12)->notNull()->unique(),
            'img' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(10),
            'address' => $this->text(),
            'gender' => $this->integer(1),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tbl_user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240315_075245_tbl_user cannot be reverted.\n";

        return false;
    }
    */
}
