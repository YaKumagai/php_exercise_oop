<?php
// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car {
    private $xName;
    private $xNumber;
    private $xColor;

    // コンストラクタ
    public function __construct($Name, $Number, $Color)
    {
        $this->xName = $Name;
        $this->xNumber = $Number;
        $this->xColor = $Color;
    }

    public function getName()
    {
        return $this->xName;
    }

    public function getNumber()
    {
        return $this->xNumber;
    }

    public function getColor()
    {
        return $this->xColor;
    }

    public function setName($Name)
    {
        $this->xName = $Name;
    }

    public function setNumber($Number)
    {
        $this->xNumber = $Number;
    }

    public function setColor($Color)
    {
        $this->xColor = $Color;
    }

    public function information()
    {
        echo '車の車種：' . $this->xName . '、車体番号：' . $this->xNumber . '、カラー：' . $this->xColor . ' です。<br>';
    }
}


// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';

// http://localhost/php_exercise/oop/index.php