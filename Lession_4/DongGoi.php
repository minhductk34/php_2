<?php
// ĐỊnh nghĩa 1 class sinh viên
class SinhVien
{
    public $name;
    public $namsinh;
    public $maSv;

    //Ham khoi tao __contruct() có tham số
    public function __construct($name, $namsinh, $maSv)
    {
        //Tên hàm __contruct là cố định không thể thay đổi 
        // PHP tự động tìm và ưu tiên thực hiện hàm nếu nó tồn tại 
        //THường được sử dụng để khởi tạo các giá trị ban đầu cho các thuộc tính đối tượng.
        $this->name = $name;
        $this->namsinh = $namsinh; //
        $this->maSv = $maSv; //
    }
    // Khai báo 1 phương thức đẻ set giá trị cho thuộc tính tên sv
    // public function setTenSV($tenSV_)
    // {
    //     //Muốn sử dụng được thuộc tính trong class ta phải dùng từ khoá $this-> tên thuộc tính
    //     $this->name = $tenSV_;
    // }
    // public function setNamSinh($namSinh)
    // {
    //     //Muốn sử dụng được thuộc tính trong class ta phải dùng từ khoá $this-> tên thuộc tính
    //     $this->namsinh = $namSinh;
    // }
    // public function setMaSV($maSv)
    // {
    //     //Muốn sử dụng được thuộc tính trong class ta phải dùng từ khoá $this-> tên thuộc tính
    //     $this->maSv = $maSv;
    // }
    public function hienThiThongTin()
    {
        echo "<br/>";
        echo "Ten: " . $this->name;
        echo "<br/>";
        echo "Nam sinh: " .  $this->namsinh;
        echo "<br/>";
        echo "Ma sinh vien: " . $this->maSv;
        echo "<br/>";
        echo "Tuoi: " . $this->tinhTuoi();
    }
    public function tinhTuoi()
    {
        $namHienTai = date("Y");
        $tuoi = $namHienTai - $this->namsinh;
        return $tuoi;
    }
}
//Khởi taọ 1 đối tượng thông qua class


$sv1 = new SinhVien("M Duc", 2000, "Ph31481");
$sv2 = new SinhVien("Trung", 1999, "Ph31222");
// $sv1->setTenSV("M Duc");
// $sv1->setNamSinh(2000);
// $sv1->setMaSV("Ph31481");
$sv1->hienThiThongTin();
$sv2->hienThiThongTin();
// $sv1->tinhTuoi();


// Gán giá trị cho các thuộc tính:
// Khai baso theem 2 thoocj tinh Nam sinh, ma sinh vien, 
//Set gia tri cho cac thuoc tinh sau do thuc hien cong viec in toan bo
//Ten: TenSv MaSv Nam sinh,

//Xây dụng 1 hàm tính tuổi có trả về trong class
//TUổi = năm hiện tại - năm sinh
// Hiển htij tuổi trong phương thức Hien thị thông tin 

// Khoi tao 1 class giang vien gom cac thuoc tinh ma gv ten gv , nam bat dau lam viec, luong gian vien, so gio day
// Tai ohong thu set gia tri cho cac thuo tinh ow tren
//Tao 1 phuong thuc tinh tong luong = luong * so gio day
// tao 1 phuong thuc de hien thi thong tin gina vien  gom day du 


class GiangVien
{
    public $maGv;
    public $tenGv;
    public $namBatDau;
    public $luong;
    public $soGioDay;

    public function __construct($maGv, $tenGv, $namBatDau, $luong, $soGioDay)
    {
        $this->maGv = $maGv;
        $this->tenGv = $tenGv;
        $this->namBatDau = $namBatDau;
        $this->luong = $luong;
        $this->soGioDay = $soGioDay;
    }
    public function hienThiThongTin()

    {
        echo "<br/>";
        echo "<br/>";
        echo "MaGv: " . $this->maGv;
        echo "<br/>";
        echo "Ten: " . $this->tenGv;
        echo "<br/>";
        echo "Nam bat dau: " .  $this->namBatDau;
        echo "<br/>";
        echo "So gio day: " . $this->soGioDay;
        echo "<br/>";
        echo "Tong luong: " . $this->tinhLuong();
    }

    public function tinhLuong()
    {
        $tongLuong =  $this->luong * $this->soGioDay;

        return $tongLuong;
    }
}
$gv1 = new GiangVien("Ph111", "Nguyen Van A", 2022, 1400, 24);
$gv2 = new GiangVien("Ph112", "Nguyen Van B", 2022, 1000, 24);
$gv1->hienThiThongTin();
$gv2->hienThiThongTin();
