<?php
/**
    PHP静态属性（static variable）的继承（inheritance），
   尤其是在静态调用绑定（late static binding）中
 */

class Foo {
        protected  static  $instance;
        public static function setInstance($ins){
            static ::$instance=$ins;
        }
        public  static  function  getInstance(){
            return static ::$instance;
        }
}

class  Bar extends  Foo {

}

class Baz extends  Foo {

}



Bar::setInstance("golang");
echo Bar::getInstance()."<br>";
echo Foo::getInstance()."<br>";

echo "<hr>";
// 好吧，牵一发动全身！子类能改变父类？！子类能改变子类？！厉害了哦
Baz::setInstance("laravel");
echo Baz::getInstance()."<br>";
echo Bar::getInstance() .'<br>';
echo Foo::getInstance() .'<br>';


/**
PS D:\phpstudy_pro\www\php_project\php应用\静态调用绑定> php 静态属性继承.php

 golang<br>golang<br><hr>laravel<br>laravel<br>laravel<br>
 */