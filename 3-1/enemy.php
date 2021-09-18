<?php

  class Enemy {
    private $name;
    public $stamina;
    public $attack;

    public function __construct($name, $stamina = 100, $attack = 10)
    {
      $this->name = $name;
      $this->stamina = $stamina;
      $this->attack = $attack;
    }

    public function sayMyName()
    {
      echo $this->name.'があらわれた';
    }

    public function powerUp()
    {
      $this->attack += 10;
      echo '攻撃力が'.$this->attack.'上がった';
    }
  }
  $slime = new Enemy('スライム');
  $slime->sayMyName();
  echo '<br>';
  echo '体力は'.$slime->stamina;
  echo '<br>';
  echo '攻撃力は'.$slime->attack;
  echo '<br>';
  $slime->powerUp();
  $slime->powerUp();
  $slime->powerUp();
  $slime->powerUp();
  $slime->powerUp();
  echo '<br>';

  class Boss extends Enemy {
    public function specialAttack()
    {
      echo '会心の一撃';
    }

    public function sayMyName()
    {
      echo 'ボスの'.$this->name.'があらわれた';
    }
  }
  $boss = new Boss('竜王');
  $boss->sayMyName();
  echo '<br>';
  $boss->specialAttack();