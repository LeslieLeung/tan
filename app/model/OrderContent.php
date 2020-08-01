<?php


namespace app\model;

use think\Model;
class OrderContent extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'oid' => 'int',
        'SKU' => 'int'
    ];

    public function oid()
    {
        return $this->belongsTo(Order::class);
    }

    public function SKU()
    {
        return $this->belongsTo(Product::class);
    }

}