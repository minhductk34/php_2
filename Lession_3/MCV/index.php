<?php
require_once "Models\PDO.php";
require_once "Controller\CustomerController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        $customerController->listCustomer();
         
        break;
    case "create":
        $customerController->addCustomer();
        break;
    case "update":
        $customerController->editCustomer();
        break;
    case "delete":
        $customerController->deleteCustomer();
        break;
}
    