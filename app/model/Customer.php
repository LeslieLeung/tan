<?php


namespace app\model;

use think\Model;

class Customer extends Model
{
    protected $pk = "cid";
    protected $schema = [
        'cid' => 'int',
        'username' => 'string',
        'sex' => 'string',
        'phone' => 'string',
        'password' => 'string'
    ];

    public function getSexAttr($value)
    {
        $status = [0 => '未知', 1 => '男', 2 => '女'];
        return $status[$value];
    }

//    public function setSexAttr($value)
//    {
//        switch ($value) {
//            case 0 :
//                return '未知';
//
//            case 1 :
//                return '男';
//
//            case 2 :
//                return '女';
//        }
//    }
}