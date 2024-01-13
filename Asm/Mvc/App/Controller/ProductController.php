<?php
namespace App\Controllers;

use App\Controller\BaseController;

class ProductController extends BaseController {
    public function __construct()
    {
        echo "ProductController";
    }
    public function index(){
        echo "Index of Product";
    }
    public function addProduct(){
        echo "Add Product";
    }
    public function destroyProduct(){
        echo "Remove Product";
    }
    public function editProduct(){
        echo "Edit Product";
    }
    public function saveProduct(){
        echo "Save Product";
    }
    public function updateProduct(){
        echo "Update Product";
    }
}
?>