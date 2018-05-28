<?php

use yii\db\Migration;

/**
 * Class m180528_070836_alert
 */
class m180528_070836_alert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180528_070836_alert cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('alert', [
          'id'=>$this->primaryKey(),
          'turu'=>$this->string(),
          'icerigi'=>$this->text(),
          'ismi'=>$this->string(),
        ]);

        $this->insert('alert',[
          'turu'=>'Önemli',
          'icerigi'=>'E-Posta adresinizi onaylayın.',
          'ismi'=>'E-Posta Uyarısı',
        ]);
    }

    public function down()
    {
        echo "m180528_070836_alert cannot be reverted.\n";

        return false;
    }

}
