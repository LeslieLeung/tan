<?php


namespace app\model;

use think\Model;
class Admin extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'username' => 'string',
        'password' => 'string'
    ];
}