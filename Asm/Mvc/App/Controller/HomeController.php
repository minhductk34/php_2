<?php

namespace App\Controllers;

use App\Controller\BaseController;

class HomeController extends BaseController {
    public function __construct()
    {
        parent::__construct();
        // Bạn có thể thực hiện bất kỳ cài đặt bổ sung nào trong constructor
        echo "Home Controller";
    }

    public function index()
    {
        // Hiển thị trang chủ từ file view
        $this->render('home.index');
    }
}
