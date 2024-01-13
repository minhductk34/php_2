<?php 
ini_set("display_errors", "1");
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use App\Models;
use App\Controller;
use App\Controller\BaseController;
use App\Models\BaseModel;

$model = new BaseModel(); 
$controller = new BaseController();
?>