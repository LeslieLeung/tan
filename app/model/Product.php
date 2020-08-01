<?php


namespace app\model;

use think\Model;

class Product extends Model
{

    protected $pk = 'SKU';
    protected $schema = [
        'SKU' => 'int',
        'name' => 'string',
        'description' => 'string',
        'photo' => 'string',
        'price' => 'float',
        'status' => 'int'
    ];

    public function getStatusAttr($value)
    {
        $status = [0 => '未上架', 1 => '正常', 2 => '已下架'];
        return $status[$value];
    }

//    public function setStatusAttr($value)
//    {
//        switch ($value) {
//            case 0:
//                return '未上架';
//
//            case 1:
//                return '正常';
//
//            case 2:
//                return '已下架';
//        }
//    }

}