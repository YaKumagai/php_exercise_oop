<?php
// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car {
    private $xName;
    private $xNumber;
    private $xColor;

    // コンストラクタ
    public function __construct($name, $number, $color)
    {
        $this->xName = $name;
        $this->xNumber = $number;
        $this->xColor = $color;
    }
    
    public function information()
    {
        echo '車の車種：' . $this->xName . '、車体番号：' . $this->xNumber . '、カラー：' . $this->xColor . ' です。';
    }
}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi {
    private $xPickUp;

    // コンストラクタ
    public function __construct($name, $number, $color)
    {
        $this->xName = $name;
        $this->xNumber = $number;
        $this->xColor = $color;
    }

    public function pickUp($passenger)
    {
        $this->xPickUp = $passenger;
    }

    public function information()
    {
        echo '車の車種：' . $this->xName . '、車体番号：' . $this->xNumber . '、カラー：' . $this->xColor . '、乗車人数は' . $this->xPickUp . '人です。';
    }

    public function lower($passenger)
    {
        if ($this->xPickUp - $passenger >= 0) {
            echo $passenger . '人降車しました。';
            $this->xPickUp -= $passenger;
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
