<?php

use yii\db\Migration;

/**
 * Class m210303_155230_add_lang_field_oadode_table
 */
class m210303_155230_add_lang_field_oadode_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%oadode}}', 'lang', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%oadode}}', 'lang');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210303_155230_add_lang_field_oadode_table cannot be reverted.\n";

        return false;
    }
    */
}
