<?php

use engine\DI\DI;

abstract class AbstractProvider
{

    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * init Это инициализация нового сервиса
     */
    abstract function init();
}