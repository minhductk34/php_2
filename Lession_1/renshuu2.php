<?php 
//Kiem tra xem so 5 va so 6 la so chan hay so le

$a = [5,6];
for ($i = 0; $i <count($a); $i++){
    if ($a[$i] %2==0){
        echo "$a[$i]"." la so chan ";
        
    }else{
        echo "$a[$i]"." la so le";
    }
        echo"<br/>";
}
// Ham la doan ma thuc hien cong viec cu the va co tinh tai su dung cao

function checkNumber($number){
    if ($number %2==0){
        echo "$number"." la so chan ";
        
    }else{
        echo "$number"." la so le";
    }
        echo"<br/>";
}
checkNumber(9);
// function checkNumber_($number_){
//     $a= $number_ %2==0 ?"":"";
//     return $a;
// }


//Viet ham co tham so tinh dien tich ham
function dienTichHam($a, $b,$h){
    $s = ($a+$b)*$h/2;
    echo "dien tich ham :" .$s;
    return $s;
}
dienTichHam(4, 5,4); 

?>