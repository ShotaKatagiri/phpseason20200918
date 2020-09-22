<?php

class Member
{
    public $name;
    public $age;
    public $tall;
    public $address;

    public function __construct($name, $tall, $age)
    { //setName($name)はどちらとも自分で付けた名前でなにを指定しても良い
        $this->name = $name;
        $this->tall = $tall;
        $this->age = $age;
    }


    public function tall()
    {
    //     $this->tall = $tall;
    //     $this->name = $name;
        echo $this->name . 'の' . '<p>身長：' . $this->tall . '</p>';
    }

    public function age()
    {
        // $this->name = $name;
        // $this->age = $age;

        echo $this->name . 'の' . '<p>年齢：' . $this->age . '</p>';
    }


    // public function getName()
    // {
    //     return $this->name;
    // }
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // public function getAge()
    // {
    //     return $this->age;
    // }
    // public function setAddress($address)
    // {
    //     $this->address = $address;
    // }
    // public function getAddress()
    // {
    //     return $this->address;
    // }

}
// echo '<ul>';
// echo '<li>年齢：' . $this->age . '</li>';
// echo '<li>住所：' . $this->address . '</li>';
// echo '</ul>';
// $m1 = new Member();
// $m1->name = '山田太郎';
// $m1->age = '21';
// $m1->address = '東京都';

// $m1->showInfo();



// $m3 = new Member();
// $m3->setName('片桐');
// echo $m3->getName();

// $m4 = new Member();
// $m4->setName('斎藤');
// echo $m4->getName();

// $m5 = new Member();
// $m5->setName('有吉');
// echo $m5->getName();

// $m3 = new Member('片桐', '178');
// $m4 = new Member('渡辺',);
// $m5 = new Member('山篠');

 $m5 = new Member('かい', '189', '36');

 $m5->tall();
 $m5->age();



//  $m5->age();
//  $m5->tall();



//  $m6 = new Member();
//  $m6->name('渡部');
//  $m6->age('29');
//  $m6->tall('192');

//  $m7 = new Member();
//  $m7->name('長田');
//  $m7->age('４９');
//  $m7->tall('178');

require_once ('Test.php');
require_once ('calc.php');


$m9 = new Test('かい', '９０', '国語');
$m9->name();

$m11 = new calc();
echo $m11->sum('3','4');

$m10 =new Test2();
$m10->setName('いさ');
echo $m10->getName();
$m10->setCouse('数学');
echo $m10->getCouse();
$m10->setScore('100');
$m10->getScore();

$date = new DateTime();
echo $date->format('Y-m-d H:i:s');

$d1 = new DateTime('2024-03-03');
$d2 = new DateTime('2024-02-27');
$interval = $d1->diff($d2);
$days = $interval->days; //日数の差を取得
$invert = $interval->invert; // 判定の数値1or0を取得
if ($days == 0) {
  echo '日付は同じです';
} else {
  if ($invert == 1) {
    echo 'd1の方が「'. $days. '日」新しいです';
  } else {
    echo 'd2の方が「'. $days. '日」新しいです';
  }
}