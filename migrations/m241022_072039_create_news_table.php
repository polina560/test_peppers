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
        $this->createTable('new_category', [
            'id' => 'int NOT NULL AUTO_INCREMENT ',
            'title' => $this->string(255, 'utf8 COLLATE utf8_unicode_ci')->notNull(),
            'alias' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')->notNull(),
        ]);

        $this->createTable('new_post', [
            'id' => 'int unsigned NOT NULL AUTO_INCREMENT ',
            'category_id' => 'int unsigned NOT NULL',
            'title' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')->notNull(),
            'excerpt' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')->notNull(),
            'content' => $this->text('utf8 COLLATE utf8_unicode_ci')->notNull(),
            'img' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci'),
            'created_at' => $this->dateTime(),
            'keywords' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci'),
            'description' => $this->string(255,  'utf8 COLLATE utf8_unicode_ci')
        ]);
//
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('new_category');
        $this->dropTable('new_post');
    }
}
