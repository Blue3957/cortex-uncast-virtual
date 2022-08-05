<?php

use Models\One;
use Models\Two;
use Models\Three;

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->db = new \DB\SQL(
    "mysql:host=localhost;dbname=test_cortex",
    'root',
    '',
    [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,
        true,
        \PDO::MYSQL_ATTR_COMPRESS,
        true,
        \PDO::ATTR_PERSISTENT => true
    ]
);

$f3->route('GET /setup', function(\Base $f3){
    One::setup();
    $one = new One();
    $one->one_property = 'lorem';
    $one->save();

    Two::setup();
    $two = new Two();
    $two->two_property = 'ipsum';
    $two->one = $one;
    $two->save();

    Three::setup();
    $three = new Three();
    $three->three_property = 'dolor';
    $three->one = $one;
    $three->save();

    $f3->reroute('/');
});

$f3->route('GET /', function(){
    $one = new One();
    $one->load();
    dump($one->cast());
});

$f3->run();
