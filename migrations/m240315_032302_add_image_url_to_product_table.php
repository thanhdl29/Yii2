<?php

use yii\db\Migration;

/**
 * Class m240315_032302_add_image_url_to_product_table
 */
class m240315_032302_add_image_url_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'image_url', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'image_url');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240315_032302_add_image_url_to_product_table cannot be reverted.\n";

        return false;
    }
    */
}
