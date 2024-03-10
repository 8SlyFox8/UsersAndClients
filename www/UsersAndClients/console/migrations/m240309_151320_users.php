<?php

use yii\db\Migration;

/**
 * Class m240309_151320_users
 */
class m240309_151320_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'users',
            [
                'id' => $this->primaryKey(),
                'email' => $this->string(50)->notNull(),
                'password' => $this->string(64)->notNull(),
                'status_id' => $this->integer(4)->defaultValue(1)->notNull(),
                'name' => $this->string(500)->notNull(),
                'sex' => $this->boolean(),
                'created_at' => $this->timestamp(0)->defaultValue("now()")->notNull(),
                'deleted' => $this->boolean()->defaultValue(true)->notNull(),
                'auth_key' => $this->string(32)
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240309_151320_users cannot be reverted.\n";

        return false;
    }
    */
}
