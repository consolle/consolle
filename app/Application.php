<?php namespace App;

class Application extends \Consolle\Application implements \Consolle\Contracts\Kernel
{
    public function __construct(\Illuminate\Contracts\Foundation\Application $app)
    {
        parent::__construct($app);
    }
}