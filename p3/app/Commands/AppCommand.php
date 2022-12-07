<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('rpsls_results', [
            'name' => 'varchar(255)',
            'thrown' => 'varchar(255)',
            'outcome' => 'varchar(255)',
            'timestamp' => 'date'
        ]);
    }
}