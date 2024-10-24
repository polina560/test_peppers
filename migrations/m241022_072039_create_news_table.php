<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m241022_072039_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('new_category');
        $this->dropTable('new_post');

        $this->createTable('category', [
            'id' => 'int NOT NULL AUTO_INCREMENT',
            'title' => 'varchar(255) NOT NULL',
            'alias' => 'varchar(255) NOT NULL',
            'PRIMARY KEY(id)'
        ]);

        $this->createTable('post', [
            'id' => 'int unsigned NOT NULL AUTO_INCREMENT ',
            'category_id' => 'int unsigned NOT NULL',
            'title' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')->notNull(),
            'excerpt' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')->notNull(),
            'content' => $this->text('utf8 COLLATE utf8_unicode_ci')->notNull(),
            'img' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci'),
            'created_at' => $this->dateTime()->notNull(),
            'keywords' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci'),
            'description' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci'),
            'PRIMARY KEY(id)'
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
        $this->dropTable('post');
    }
}
