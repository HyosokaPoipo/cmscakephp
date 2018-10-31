<?php
use Migrations\AbstractSeed;
use Cake\I18n\Time;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
            [
             'email' => 'cakephp@poipo.com', 
             'password' => 'sekret', 
             'created' => new Time(), 
             'modified' => new Time()
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
