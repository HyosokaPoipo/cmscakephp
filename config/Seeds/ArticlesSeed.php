<?php
use Migrations\AbstractSeed;
use Cake\I18n\Time;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user_id' => 1,
            'title' => 'my first post',
            'slug' => 'my-first-post',
            'body' => 'this is the body of my first post',
            'published' => true,
            'created' => Time::now(),
            'modified' => Time::now()

        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
