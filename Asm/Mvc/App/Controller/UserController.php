<?php

namespace App\Controllers;

use App\Controller\BaseController;
use App\Models\User;

class UserController extends BaseController {
    private $users = [
        ['id' => 1, 'name' => 'User 1', 'email' => 'user1@example.com'],
        ['id' => 2, 'name' => 'User 2', 'email' => 'user2@example.com'],
        ['id' => 3, 'name' => 'User 3', 'email' => 'user3@example.com'],
    ];

    // GET: Hiển thị danh sách người dùng
    public function index()
    {
        $data = ['users' => $this->users];
        $this->render('users.index', $data);
    }

    // GET: Hiển thị giao diện tạo mới người dùng
    public function create()
    {
        $this->render('users.create');
    }

    // POST: Lưu dữ liệu người dùng nhập để tạo mới người dùng
    public function store()
    {
        // Logic để lưu trữ người dùng mới (ví dụ: lưu vào cơ sở dữ liệu)
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Người dùng đã được lưu thành công!";
    }

    // GET: Hiển thị giao diện chỉnh sửa người dùng theo id
    public function edit($id)
    {
        // Logic để lấy chi tiết người dùng theo ID
        $user = $this->getUserById($id);

        if ($user) {
            // Hiển thị form để chỉnh sửa người dùng với dữ liệu được điền sẵn
            $data = ['user' => $user];
            $this->render('users.edit', $data);
        } else {
            echo "Không tìm thấy người dùng!";
        }
    }

    // POST: Cập nhật người dùng theo id
    public function update($id)
    {
        // Logic để cập nhật người dùng theo ID
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Người dùng có ID $id đã được cập nhật thành công!";
    }

    // GET: Xoá người dùng theo id
    public function destroy($id)
    {
        // Logic để xoá người dùng theo ID
        // Chuyển hướng đến trang index hoặc hiển thị thông báo thành công
        echo "Người dùng có ID $id đã được xoá thành công!";
    }

    private function getUserById($id)
    {
        // Hàm trợ giúp để lấy chi tiết người dùng theo ID
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}
