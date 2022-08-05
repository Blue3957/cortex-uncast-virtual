<?php

namespace Models;

use DB\SQL\Schema;

class Three extends \DB\Cortex
{
    protected $db = 'db';
    protected $table = 'three';
    protected $fieldConf = [
        'three_property' => [
            'type' => Schema::DT_VARCHAR256
        ],
        'one' => [
            'belongs-to-one' => '\Models\One'
        ]
    ];
}
