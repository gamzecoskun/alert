<?php

use yii\db\Migration;

/**
 * Class m180520_203510_alert
 */
class m180520_203510_alert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

            $this->createTable('alert', [
                'id' => $this->primaryKey(),
                'name' => $this->string(200)->notNull(),
                'category' => $this->string(200)->notNull(),
            ], $tableOptions);

            $this->insert('alert', [
                'name' => 'welcome',
                'category' => 'daily_message_text',
            ]);
            
            $this->insert('alert', [
                'name' => 'bye',
                'category' => 'daily_message_text',
            ]);

            $this->insert('alert', [
                'name' => 'attention',
                'category' => 'warning',
            ]);
    }

    /**
     * {@inheritdoc}
     */
    function safeDown()
    {
        $this->delete('news', ['id => 1']);
        $this->dropTable('alert');
    }



    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180520_203510_alert cannot be reverted.\n";

        return false;
    }
    */
}
}