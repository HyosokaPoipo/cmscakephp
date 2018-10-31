<?php
use Migrations\AbstractSeed;
use Cake\Log\Log;
use Cake\I18n\Time;
use Cake\I18n\Date;

/**
 * Tests seed.
 */
class TestsSeed extends AbstractSeed
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
        $time = new Time();
        Log::debug('hellow Maryadi');
        Log::debug($time);
        Log::debug($time->timezone);
        Log::debug(Time::now());
        Log::debug(new Date());
    }
}
