<?php


namespace app\model;

use think\Model;

class Order extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'cid' => 'int',
        'status' => 'int'
    ];

    public function cid()
    {
        return $this->belongsTo(Customer::class);
    }

    public function getStatusAttr($value)
    {
        $status = [
            0 => '未付款',
            1 => '已付款',
            2 => '已完成',
            -1 => '取消'
        ];
        return $status[$value];
    }

}