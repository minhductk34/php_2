<?php
namespace App\Controllers;

use App\Controller\BaseController;

class HomeController extends BaseController {
    public function __construct()
    {
        echo "Home Controller";
    }
    public function index(){
        echo "Home";
    }
}
?>