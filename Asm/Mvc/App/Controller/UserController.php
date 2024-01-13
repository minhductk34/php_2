<?php
namespace App\Controllers;

use App\Controller\BaseController;

class UserController extends  BaseController {
    public function __construct()
    {
        echo "UserController";
    }
    public function index(){
        echo "Index of User";
    }
    public function addUser(){
        echo "Add User";
    }
    public function removeUser(){
        echo "Remove User";
    }
    public function editUser(){
        echo "Edit User";
    }
}
?>