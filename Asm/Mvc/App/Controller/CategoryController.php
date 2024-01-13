<?php

namespace App\Controllers;

use App\Controller\BaseController;

class CategoryController extends BaseController {
    private $categories = [
        ['id' => 1, 'name' => 'Category 1'],
        ['id' => 2, 'name' => 'Category 2'],
        ['id' => 3, 'name' => 'Category 3'],
    ];

    public function __construct()
    {
        parent::__construct();

    }

    public function index(){

        $data = ['categories' => $this->categories];
        $this->render('categories.index', $data);
    }

    public function addCate(){

        $this->render('categories.add');
    }

    public function storeCate(){

        echo "Category stored successfully!";
    }

    public function removeCate($id){

        echo "Category with ID $id removed successfully!";
    }

    public function editCate($id){

        $category = $this->getCategoryById($id);

        if ($category) {

            $data = ['category' => $category];
            $this->render('categories.edit', $data);
        } else {
            echo "Category not found!";
        }
    }

    public function updateCate($id){

        echo "Category with ID $id updated successfully!";
    }

    private function getCategoryById($id){
        // Helper function to retrieve category details by ID
        foreach ($this->categories as $category) {
            if ($category['id'] == $id) {
                return $category;
            }
        }
        return null;
    }
}
