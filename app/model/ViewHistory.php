<?php


namespace app\model;

use think\Model;
class ViewHistory extends Model
{
    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'cid' => 'int',
        'SKU' => 'int',
        'time' => 'int'
    ];

    public function cid()
    {
        return $this->belongsTo(Customer::class);
    }

    public function SKU()
    {
        return $this->belongsTo(Product::class);
    }
}