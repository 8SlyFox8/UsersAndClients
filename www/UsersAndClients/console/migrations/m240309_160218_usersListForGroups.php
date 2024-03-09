<?php

use yii\db\Migration;

/**
 * Class m240309_160218_usersListForGroups
 */
class m240309_160218_usersListForGroups extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'usersListForGroups',
            [
                'id' => $this->primaryKey(),
                'users_id' => $this->integer()->notNull(),
                'usersGroups_id' => $this->integer()->notNull()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usersListForGroups');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240309_160218_usersListForGroups cannot be reverted.\n";

        return false;
    }
    */
}
