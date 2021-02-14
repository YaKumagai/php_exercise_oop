<?php
class Car {
    public $getName;
    public $getNumber;
    public $getColor;
    public function __construct($getName, $getNumber, $getColor)
    {
        $this->getName = $getName;
        $this->getNumber = $getNumber;
        $this->getColor = $getColor;
    }
    public function selfIntroduction()
    {
        echo $this->getName . '<br>';
        echo $this->getNumber . '<br>';
        echo $this->getColor . '<br>';
        echo '車の車種：' . $this->getName . '、車体番号：' . $this->getNumber . '、カラー：' . $this->getColor . 'です。<br>';
    }
}
$car = new Car('ランクル', 100, 'black');
$car->selfIntroduction();
$car = new Car('アルファード', 200, 'red');
$car->selfIntroduction();