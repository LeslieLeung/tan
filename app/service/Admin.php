<?php


namespace app\service;


use app\model\Product;

class Admin
{
    public function signup($data)
    {
        if (strcmp($data['password'], $data['repeat']) != 0) {
            return -1; //两次密码不一致
        }
        $is_exist = \app\model\Admin::where('username', '=', $data['username'])->find();
        if($is_exist) {
            return -2; //已经注册
        }
        $admin = new \app\model\Admin();
        $admin->username = $data['username'];
        $admin->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $res = $admin->save();
//        echo $res;
        return $res;
    }

    public function login($data)
    {
        $admin = \app\model\Admin::where('username', '=', $data['username'])
            ->find();
        if (password_verify($data['password'], $admin['password'])) {
            return 1;
        }
        return 0;
    }

    public function getProducts()
    {
        $products = Product::field("SKU,name,description,price,status")->select();
        return $products;
    }

    public function editProduct($product)
    {
        $res = Product::update($product);
        return $res;
    }

    public function addProduct($product)
    {
        $productIns = new Product($product);
        $res = $productIns->save();
        return $res;
    }

    public function onsaleProduct($SKU)
    {
        $product = (new Product())->where('SKU', '=', $SKU)->find();
        $product->status = 1;
        $res = $product->save();
        return $res;
    }

    public function offsaleProduct($SKU)
    {
        $product = (new Product())->where('SKU', '=', $SKU)->find();
        $product->status = 2;
        $res = $product->save();
        return $res;
    }

    public function getProduct($SKU)
    {
        $product = (new Product())->where('SKU', '=', $SKU)->find();
        return $product;
    }
}