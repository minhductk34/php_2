<?php

namespace App\Controllers;

use App\Controller\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    private $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 150],
        ['id' => 3, 'name' => 'Product 3', 'price' => 200],
    ];

    // GET: Hiển thị danh sách sản phẩm
    public function index()
    {
        $data = ['products' => $this->products];
        $this->render('products.index', $data);
    }

    // GET: Hiển thị giao diện tạo mới sản phẩm
    public function create()
    {
        $this->render('products.create');
    }

    // POST: Lưu dữ liệu người dùng nhập để tạo mới sản phẩm
    public function store()
    {
        // Logic để lưu trữ sản phẩm mới (ví dụ: lưu vào cơ sở dữ liệu)
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Sản phẩm đã được lưu thành công!";
    }

    // GET: Xoá sản phẩm theo id truyền vào
    public function destroy($id)
    {
        // Logic để xoá sản phẩm theo ID
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Sản phẩm có ID $id đã được xoá thành công!";
    }

    // GET: Hiển thị giao diện chỉnh sửa sản phẩm
    public function edit($id)
    {
        // Logic để lấy chi tiết sản phẩm theo ID
        $product = $this->getProductById($id);

        if ($product) {
            // Hiển thị form để chỉnh sửa sản phẩm với dữ liệu được điền sẵn
            $data = ['product' => $product];
            $this->render('products.edit', $data);
        } else {
            echo "Không tìm thấy sản phẩm!";
        }
    }

    // POST: Cập nhật sản phẩm theo id truyền vào
    public function update($id)
    {
        // Logic để cập nhật sản phẩm theo ID
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Sản phẩm có ID $id đã được cập nhật thành công!";
    }

    private function getProductById($id)
    {
        // Hàm trợ giúp để lấy chi tiết sản phẩm theo ID
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }
}
