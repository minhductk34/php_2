<?php

namespace App\Controllers;

use App\Controller\BaseController;

class CategoryController extends BaseController {
    public function __construct()
    {
        echo "CategoryController";
    }
    public function index(){
        echo "Index of Categories";
    }
    public function addCate(){
        echo "Add Categories";
    }
    public function removeCate(){
        echo "Remove Categories";
    }
    public function editCate(){
        echo "Edit Categories";
    }
}


?>