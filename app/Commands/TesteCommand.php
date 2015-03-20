<?php namespace App\Commands;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class TesteCommand extends \Consolle\Command\Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'teste';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando de teste';

    protected $daemon = true;

    /**
     * Execute command
     */
    public function fire()
    {
        $this->info('Teste: ' . date('Y-m-d H:i:s'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            //['name', InputOption::VALUE_REQUIRED, 'Helo of argument', null],
        ];
    }
}