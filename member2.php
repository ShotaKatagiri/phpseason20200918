<?php

class Member
{
  public $name;
  public $age;
  public $address;

  public function setName($name){//setName($name)はどちらとも自分で付けた名前でなにを指定しても良い
      $this->name = $name;
  }
  public function getName(){
      return $this->name;
  }
  public function setAge($age){
      $this->age =$age;
  }
  public function getAge(){
      return $this->age;
  }
  public function setAddress($address){
      $this->address = $address;
  }
  public function getAddress(){
      return $this->address;
  }

  public function showInfo()
  {
    echo '<ul>';
    echo '<li>名前：' . $this->name . '</li>';
    echo '<li>年齢：' . $this->age . '</li>';
    echo '<li>住所：' . $this->address . '</li>';
    echo '</ul>';
  }

}

// $m1 = new Member();
// $m1->name = '山田太郎';
// $m1->age = '21';
// $m1->address = '東京都';

// $m1->showInfo();



$m3 = new Member();
$m3->setName('片桐');
echo $m3->getName();

$m4 = new Member();
$m4->setName('斎藤');
echo $m4->getName();

$m5 = new Member();
$m5->setName('有吉');
echo $m5->getName();