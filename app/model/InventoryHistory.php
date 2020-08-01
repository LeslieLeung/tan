<?php


namespace app\model;

use think\Model;

class InventoryHistory extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'time' => 'int',
        'SKU' => 'int',
        'status' => 'int',
        'count' => 'int',
        'unit_price' => 'float'
    ];

    public function getStatusAttr($value)
    {
        $status = [0 => '出库', 1 => '入库'];
        return $status[$value];
    }

//    public function setStatusAttr($value)
//    {
//        switch ($value) {
//            case 0:
//                return '出库';
//            case 1:
//                return '入库';
//        }
//    }

    public function SKU()
    {
        return $this->belongsTo(Product::class);
    }

}