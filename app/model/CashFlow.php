<?php


namespace app\model;

use think\Model;
class CashFlow extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'dir' => 'int',
        'time' => 'int',
        'money' => 'float',
        'description' => 'string'
    ];

}