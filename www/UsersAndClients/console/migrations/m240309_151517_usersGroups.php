<?php

use yii\db\Migration;

/**
 * Class m240309_151517_usersGroups
 */
class m240309_151517_usersGroups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'usersGroups',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usersGroups');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240309_151517_usersGroups cannot be reverted.\n";

        return false;
    }
    */
}
