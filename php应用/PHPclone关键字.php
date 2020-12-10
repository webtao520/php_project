<?php
/*
PHP 中的对象模型是通过引用来调用对象的，但有时需要建立一个对象的副本，在改变原有对象时不希望影响到对象副本。
如果使用new关键字重新创建对象，再为属性赋上相同的值，这样做会比较烦琐而且也容易出错。在 PHP 中可以根据现有的对象克隆出一个完全一样的对象，
克隆以后，原本对象和副本对象是完全独立互不干扰的。

在 PHP 中可以使用 clone 关键字克隆对象，语法格式如下：
克隆对象名称 = clone 原对象名称;

因为 clone 的方式实际上是对整个对象的内存区域进行了一次复制并用新的对象变量指向新的内存，因此赋值后的对象和原对象之间是相互独立的。

对象克隆成功后，它们中的成员方法、属性以及值是完全相同的。如果要对克隆后副本的成员属性重新赋值，可以使用《PHP魔术方法》中介绍的 __clone() 方法。

 */

class Website {
        public  $name,$url;
        public function __construct($name,$url)
        {
            $this->name=$name;
            $this->url=$url;
        }
        public function output(){
            echo $this->name.','.$this->url.'<br>';
        }
}

$obj  = new Website('C语言中文网', 'http://c.biancheng.net/php/');
$obj2=clone $obj; // 注意：如果使用=将一个对象赋值给一个变量，那么这时得到的将是一个对象的引用，通过这个变量更改属性的值将会影响原来的对象。
$obj  -> output();
$obj2 -> output();
echo '<pre>';
var_dump($obj);
var_dump($obj2);
// 修改克隆对象值
$obj2->name="我是克隆对象的名字";

var_dump($obj);
var_dump($obj2);