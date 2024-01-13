<?php 
namespace App\Controller;
use Jenssegers\Blade\Blade;

class BaseController{
 public function __construct() {
    echo "Controller";
 }
    protected function render($viewFile, $viewData = []): void
    {
        $blade = new Blade('./App/views', './cache');

        echo $blade->make($viewFile, $viewData)->render();
    }
}
?>