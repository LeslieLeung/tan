<?php


namespace app\model;

use think\Model;
class Inventory extends Model
{

    protected $pk = 'id';
    protected $schema = [
        'id' => 'int',
        'SKU' => 'int',
        'count' => 'int'
    ];

    public function SKU()
    {
        return $this->belongsTo(Product::class);
    }

}