<?php
use Migrations\AbstractMigration;

class CmsDatabase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        /* users table */
        $table = $this->table('users');
        $table->addColumn('email', 'string', [
            'limit' => 255,
            'null' => false
        ]);
        $table->addColumn('password', 'string', [
            'null' => false
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false
        ]);
        $table->create();

        /* articles table */
        $table = $this->table('articles');
        $table->addColumn('user_id', 'integer', [
            'null' => false
        ]);
        $table->addColumn('title', 'string', [
            'null' => false
        ]);
        $table->addColumn('slug', 'string', [
            'null' => false
        ]);
        $table->addColumn('body', 'text');
        $table->addColumn('published', 'boolean', [
            'default' => false
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false
        ]);
        $table->create();

        /** tags table **/
        $table = $this->table('tags');
        $table->addColumn('title', 'string', [
            'limit' => 191
        ]);
        $table->addColumn('created', 'datetime', [
            'null' => false
        ]);
        $table->addColumn('modified', 'datetime', [
            'null' => false
        ]);
        $table->create();

        /** article_tags table **/
        $table = $this->table('article_tags');
        $table->addColumn('article_id', 'integer', [
            'null' => false
        ]);
        $table->addColumn('tag_id', 'integer', [
            'null' => false
        ]);
        $table->create();
    }
}
