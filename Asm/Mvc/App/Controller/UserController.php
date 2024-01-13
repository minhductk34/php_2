<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController {
    public function index()
    {

        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

        if (empty($keyword)) {
            $users = User::get();
        } else {
            $users = User::where('name', 'like', "%$keyword%")->get();
        }




        return $this->render('user.index', compact('users', 'keyword'));
    }

    public function store()
    {
        // validate kiểm tra các giá trị gửi lên có không, nếu không có thì phải quay lại đường dẫn form tạo mới
        $user = new User();
        $user->name = $_POST['name'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT); // ở hàm login, cần sử dụng password_verify để tiến hành kiểm tra password
        $user->email = $_POST['email'];
        $user->status = (int) $_POST['status'];

        $fileName = '';
        $avatarFile = $_FILES['avatar'];
        if ($avatarFile['size'] > 0) {
            $path = '/public/images/avatars/';
            $fileName = $path . uniqid() . '_' . $avatarFile['name'];
            move_uploaded_file($avatarFile['tmp_name'], $fileName);
        }
        $user->avatar = $fileName; // gán đường dẫn vào thuộc tính avatar

        $user->save();

    }
}
