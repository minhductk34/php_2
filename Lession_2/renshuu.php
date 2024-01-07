
<?php 
// Enable error reporting for all types of errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Your PHP code goes here

// Lab2
// Su dung ham tra ve der tinhs ptinh bac 2
// Bai 2 Su dung ham khong tra ve de thuwc hienj bai toan sau
// Truyen vao thon tin* Ho ten, nam sinh, gioi tinh
// 0 la nam, 1 la nu
//Kiem tra xem nguoi nay co du tuoi di nghia vu qs hay k, hien thi kq oong hoac ba co hoac khong du tuoi di nvqs
// Tuoi = nam hien tai - nam sinh
// Do toi di nghiax vu >= 18 tuoi <=27 tuoi

//Bai1
function pt1($a, $b, $c) {

    $delta = ($b * $b) - (4 * $a * $c);

    if ($a == 0) {
        echo "Phuong trinh co dang " . $b . "x + " . $c . " = 0";
        if ($b == 0) {
            echo "Phuong trinh vo nghiem";
        } else {
            $x = -$c / $b;
            echo "Phuong trinh co mot nghiem duy nhat x = " . $x;
        }
    } else if ($delta < 0) {
        echo "Phuong trinh vo nghiem";
    } else if ($delta == 0) {
        $x = -$b / (2 * $a);
        return $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phuong trinh co hai nghiem x1: " . $x1 . " va x2: " . $x2;
    }

}


$a = 1;
$b = -3;
$c = 2;

pt1($a, $b, $c);
echo "<br>"."================================" . "<br>";
// Bai 2

function nvqs($ho_ten,$tuoi,$nam_sinh, $gioi_tinh){
    $nam_hien_tai = date('Y');
    
    $tuoi = $nam_hien_tai - $nam_sinh;
  
    $gioiTinhText = ($gioi_tinh == 0) ? "Ong" :  "Ba" ;
    if (18 <= $tuoi && $tuoi <= 27){
       echo $gioiTinhText ." ".$ho_ten." co du tuoi di nvqs";
    }else{
        echo $gioiTinhText ." ".$ho_ten." khong du tuoi di nvqs";
    }
}
nvqs("a",23,2000,0)
?>