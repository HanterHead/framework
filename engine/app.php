<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;


try{

    $di = new DI();

    $services =  require __DIR__ . '/Config/Service.php';


    /**
     * В $services получаем доступ к массиву пространства имён, где указано, что это классы.
     * Перебираем их циклом создаём объект этого класса и передаём туда объект DI, затем инициализируем
     */
    foreach($services as $service){
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();

}catch(\ErrorException $e){
    echo $e->getMessage();
}