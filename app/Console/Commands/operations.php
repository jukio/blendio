<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class operations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations:add {number1?} {number2?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para crear suma de números';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        if(empty($this->argument('number1')) || empty($this->argument('number2'))) {

            $this->error('Debe introducir los números para sumarlos. Por ejemplo: php artisan numbers:add 5 8');
            return 0;

        }else {

            $add = $this->argument('number1') + $this->argument('number2');
            $this->info('La suma de los números es: '. $add);
            return 0;

        }

    }
}
