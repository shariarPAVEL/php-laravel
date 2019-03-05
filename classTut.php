<?php
  class Calculator{
    private $a = 10;
    private $b = 20;

    public function add(){
      return $this->a + $this->b;
    }
  }

  $cal = new Calculator();
  echo $cal->add();

?>
