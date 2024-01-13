<?php
//1 class kees thừ trong oop
//Môt classs kế thưef từ class cha của nó
//nó se có thể sử dụng lại các tuhoocj tính vào phương thức từ class cha
// Demo tính kes thừa
class ConNguoi
{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an()
    {
        echo "Ăn bằng miệng";
        echo "</br>";
    }
    public function setChan($sochan)
    {
        $this->chan = $sochan;
    }
    public function setTay($sotay)
    {
        $this->tay = $sotay;
    }
}

class NguoiLon extends ConNguoi
{
    public function di()
    {
        echo "Đi bằng " . $this->chan . " chân";
    }
}
$nguoiLon = new NguoiLon();
$nguoiLon->an();
$nguoiLon->setchan(2);
$nguoiLon->di();

class TreEm extends ConNguoi
{


    public function bo()
    {
        echo "</br>";
        echo "Trẻ em bò bằng " . $this->tay . " tay " . $this->chan . " chân";
    }
}
$treEm = new TreEm();
$treEm->setChan(2);
$treEm->setTay(2);
$treEm->bo();

//Phạm vi truy cập
// Public, Private, Protected
class TruyCap
{
    public $public_ = "Có thể truy cập ở bất cứ đâu";
    private $private_ = "Chỉ sử dụng được bên trong class";
    protected $protected_ = "Có thể truy cập ở các class kế thừa từ class cha";
    public function  getPrivate()
    {
        return $this->private_;
    }
    public function  getProtected()
    {
        return $this->protected_;
    }
    
}
class test extends TruyCap
{
    function tesst2()
    {
        echo "</br>";
        echo $this->protected_;
    }
}

$phamViTruyCap = new TruyCap();
echo "</br>";
echo $phamViTruyCap->public_;
echo "</br>";
// $test = new test();
// $test->tesst2();
echo $phamViTruyCap->getProtected();
echo "</br>";
echo $phamViTruyCap->getPrivate();
// $phamViTruyCap->private_ = true;
// echo "</br>";
// $phamViTruyCap->protected_ = true;
// echo "</br>";
