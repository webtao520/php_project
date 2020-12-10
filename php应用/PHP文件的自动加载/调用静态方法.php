<?php
class test {
     public static  function loadprint($class){
          $file= $class.'.class.php';
          if(is_file($file)){
              require_once ($file);
          }
     }
}

spl_autoload_register(['test','loadprint']); //  注册给定的函数作为__autoload的实现
//  另一种写法； spl_autoload_register("test::loadprint");
$obj = new PRINTIT();
$obj->doPrint();
