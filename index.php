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

    public function information()
    {
        echo '車の車種：' . $this->xName . '、車体番号：' . $this->xNumber . '、カラー：' . $this->xColor . ' です。';
    }
}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi {
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

    public function pickUp($passenger)
    {
        $this->pickUp = $passenger;
    }

    public function information()
    {
        echo '車の車種：' . $this->xName . '、車体番号：' . $this->xNumber . '、カラー：' . $this->xColor . '、乗車人数は' . $this->pickUp . '人です。';
    }

    public function lower($passenger)
    {
        $this->lower = $passenger;

        if ($this->pickUp - $this->lower >= 0) {
            echo $this->lower . '人降車しました。';
            $this->pickUp = $this->pickUp - $this->lower;
        } else {
            echo '降車人数に誤りがあります。';
        }
    }
}

// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->information();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->information();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);

// http://localhost/php_exercise/oop/index.php
