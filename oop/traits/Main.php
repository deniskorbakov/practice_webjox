<?php

trait SayHello {
    public function hello() {
      echo "Привет мир!";
    }
  }
  
  class MyClass {
    use SayHello;
  }
  
  $obj = new MyClass();
  $obj->hello();