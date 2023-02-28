<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;
class ProductController extends BaseController{
    protected $product;
    public function __construct()
    {
        $this->product=new Product();
    }

    public  function  index(){
        $products= $this->product->List();
        return $this->render('product.index',compact('products'));
    }
    public  function  add(){
        if(isset($_POST["btn-add"])){
            $this->product->Add($_POST['username'],$_POST['price']);
            redirect("success","Thêm Thành Công","./");

        }
        return $this->render('product.add');
    }

}