<?php


namespace app\controller;

class Admin extends ResponseController
{
    public function getInventory()
    {

    }

    public function getProducts()
    {
//        $page = input('post.page');
        $products = (new \app\service\Admin())->getProducts();
//        return json($products);
        return $this->renderSuccess("请求成功",$products);
    }

    public function editProduct()
    {
        $newProduct = input('post.');
        $res = (new \app\service\Admin())->editProduct($newProduct);
        if (!$res) {
            return $this->renderError();
        }
        return $this->renderSuccess();
    }

    public function addProduct()
    {
        $newProduct = input('post.');
        $res = (new \app\service\Admin())->addProduct($newProduct);
        if (!$res) {
            return $this->renderError();
        }
        return $this->renderSuccess();
    }

    public function onsaleProduct()
    {
        $SKU = input('post.SKU');
        $res = (new \app\service\Admin())->onsaleProduct($SKU);
        if (!$res) {
            return $this->renderError();
        }
        return $this->renderSuccess();
    }

    public function offsaleProduct()
    {
        $SKU = input('post.SKU');
        $res = (new \app\service\Admin())->offsaleProduct($SKU);
        if (!$res) {
            return $this->renderError();
        }
        return $this->renderSuccess();
    }

    public function getProduct()
    {
        $SKU = input('post.SKU');
        $res = (new \app\service\Admin())->getProduct($SKU);
        if (!$res) {
            return $this->renderError();
        }
        return $this->renderSuccess("请求成功", $res);
    }

}