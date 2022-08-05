<?php

namespace Models;

use DB\SQL\Schema;

class One extends \DB\Cortex
{

    function __construct(){
        parent::__construct();

        $this->virtual('virtual_two', function($self){
            $model = new Two();
            $model->load();
            return $model;
        });

        $this->virtual('virtual_three', function($self){
            $model = new Three();
            return $model->find();
        });

    }

    protected $db = 'db';
    protected $table = 'one';
    protected $fieldConf = [
        'one_property' => [
            'type' => Schema::DT_VARCHAR256
        ],
        'two' => [
            'has-one' => ['\Models\Two', 'one']
        ],
        'three' => [
            'has-many' => ['\Models\Three', 'one']
        ]
    ];

}