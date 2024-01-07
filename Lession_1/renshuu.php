<?php
// Kiểu dữ liệu Int, Float, String, Bool, Null
$ho_ten = "Nguyen Minh Duc";
$namsinh = 2000;
$sdt = "1234567";
$myFloat = 3.14;
$bol = true;
$myNull = null;

// Hàm mẫu
function myFunction()
{
    return "Hello from myFunction!";
}

// Mảng trong PHP
$myArr_1 = ["Volvo", 15, ["apples", "bananas"], myFunction()];
$myArr_2 = array("Volvo", 15, ["apples", "bananas"], myFunction());

var_dump($myArr_1);
echo "<br>";
print_r($myArr_2);
// Mảng tuần tự (indexed array) Đánh từ 0->n-1
$nyc = array("a", "b", "c", "d", "e");


for ($i = 0; $i < count($nyc); $i++) {
    echo $nyc[$i];
    echo "<br>";
}

foreach ($nyc as $key => $value) {
    echo "nyc o $key co ten la $value";

    echo "<br>";
}
$count = 0;
$sum = 0;
$songuyen = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for ($i = 0; $i < count($songuyen); $i++) {
    if ($songuyen[$i] % 2 == 0) {
        echo $songuyen[$i] . " ";
        $count++;
        $sum += $songuyen[$i];
    }
}
echo "<br>";
echo "Tổng các số chẵn: " . $sum;





//Mang lien hop 
$sinhVien = [
    'hoten' => 'Minh Duc',
    'queQuan' => 'Hai Duong',
    'namSinh' => 2000,
    'diemTB' => '20.1'

];


$mau_sac = [
    'red' => 'Mau do',
    'blue' => 'Mau xanh duong',
    'green' => 'Mau xanh la'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Table</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Mau sac</th>
            <th>Mo ta</th>
            <th>Mau</th>
        </tr>
        <?php foreach ($mau_sac as $key => $value) : ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
                <td style="background-color: <?php echo $key; ?>; width: 20px; height: 20px;"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>