<?php
/*
     __invoke()，调用函数的方式调用一个对象时的回应方法
    作用：

    当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。

    注意：

    本特性只在 PHP 5.3.0 及以上版本有效。

    直接上代码：
 */

class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name = "", $age = 25, $sex = "男")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo '这可是一个对象哦';
    }
}

$person=new Person('小米');
$person();


