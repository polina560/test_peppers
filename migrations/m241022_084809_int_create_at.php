<?php

use yii\db\Migration;

/**
 * Class m241022_084809_int_create_at
 */
class m241022_084809_int_create_at extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('new_post', 'created_at', $this->integer(11)->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('new_post', 'created_at', $this->dateTime()->notNull());

    }





}
