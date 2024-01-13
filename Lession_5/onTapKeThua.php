<?php 

// Tạo 1 class ConNguoi gồm các thuộc tính: hoTen, diaChi, namSinh, email, sdt
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// Tạo phương thức hiển thị thông tin: hoTen, diaChi, namSinh, email, sdt

// Tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính: diemToan, diemLy, diemHoa
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính điểm tb của HocSinh = (Toán + lý+ hóa)/3
// Tạo phương thức hiển thị thông tin HocSinh hiển thị ra các thông tin:
// hoTen, diaChi, namSinh, email, sdt, điểm TB

// Tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính: luongCB, soGioDay
// Tạo phương thức set giá trị cho các thuộc tính trên (sử dụng hàm __construct)
// Tạo phương thức tính tổng lương = luongCB *soGioDay
// Tạo phương thức hiển thị thông tin GiangVien hiển thị ra các thông tin
// hoTen, diaChi, namSinh, email, sdt, tổng lương

class ConNguoi_ {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt) {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
    }

    public function tinhTuoi() {
        $namHienTai = date("Y");
        $tuoi = $namHienTai - $this->namSinh;
        return $tuoi;
    }

    public function hienThiHoTen() {
        echo "<br/>";
        echo "Ho Ten: " . $this->hoTen;
        echo "<br/>";
        echo "Dia Chi: " . $this->diaChi;
        echo "<br/>";
        echo "Nam Sinh " . $this->namSinh;
        echo "<br/>";
        echo "Email: " . $this->email;
        echo "<br/>";
        echo "Sdt: " . $this->sdt;
        echo "<br/>";

        echo "Tuoi: " . $this->tinhTuoi();
    }
}

class HocSinh extends ConNguoi_ {
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $diemToan, $diemLy, $diemHoa) {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function tinhDiem() {
        $diemTb = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $diemTb;
    }

    public function hienThiThongTin() {
        echo parent::hienThiHoTen(); 
        echo "<br/>";
        echo "DiemTb: " . $this->tinhDiem();
    }
}

class GiangVien extends ConNguoi_ {
    public $luong;
    public $soGioDay;

    public function __construct($hoTen, $diaChi, $namSinh, $email, $sdt, $luong, $soGioDay) {
        parent::__construct($hoTen, $diaChi, $namSinh, $email, $sdt);
        $this->luong = $luong;
        $this->soGioDay = $soGioDay;
    }

    public function tinhLuong() {
        $tongLuong = $this->luong * $this->soGioDay;
        return $tongLuong;
    }

    public function hienThiThongTinGV() {
        echo parent::hienThiHoTen();
        echo "<br/>";
        echo "Luong: " . $this->tinhLuong();
    }
}

$hocSinh = new HocSinh("Nguyen Van A", "Ha Noi", 2000, "nguyenvana@gmail.com", "123456", 7, 8, 9);
$hocSinh->hienThiThongTin();

$giangVien = new GiangVien("Nguyen Van B", "Ho Chi Minh", 1980, "nguyenvanb@gmail.com", "654321", 300, 20);
$giangVien->hienThiThongTinGV();
