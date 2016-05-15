<?php

use yii\db\Migration;

class m160515_204002_temp extends Migration
{
    public function up()
    {
     $this->createTable('recentupdates', [
            'id' => $this->primaryKey(),
            'timestamp' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);
            
    $this->insert('recentupdates', [
            'timestamp' => '05-16-16',
            'content' => 'ADDED MIGRATION',
        ]);
    }

    public function down()
    {
        $this->dropTable('recentupdates');
        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
