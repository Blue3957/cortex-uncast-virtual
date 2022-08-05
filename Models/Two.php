<?php

namespace Models;

use DB\SQL\Schema;

class Two extends \DB\Cortex
{
    protected $db = 'db';
    protected $table = 'two';
    protected $fieldConf = [
        'two_property' => [
            'type' => Schema::DT_VARCHAR256
        ],
        'one' => [
            'belongs-to-one' => '\Models\One'
        ]
    ];
}
