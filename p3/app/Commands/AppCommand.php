<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();

        dump('Refresh is Complete!');
    }

    public function migrate()
    {
        $this->app->db()->createTable('rpsls_results', [
            'name' => 'varchar(255)',
            'thrown' => 'varchar(255)',
            'outcome' => 'varchar(255)',
            'timestamp' => 'timestamp'
        ]);

        dump('Migration is Complete!');
    }

    public function seed()
    {
        for($i=0; $i<5; $i++) {
            $this->app->db()->insert('rpsls_results', [
                'name' => 'Bob',
                'thrown' => ['Rock', 'Paper', 'Scissors', 'Lizard', 'Spock'][rand(0, 4)],
                'outcome' => ['Bob Wins!', 'Bob\'s Opponent Wins!'][rand(0, 1)],
                'timestamp' => '2022-12-12 20:00:00'
            ]);
        }

        dump('Seed is Complete!');
    }
}