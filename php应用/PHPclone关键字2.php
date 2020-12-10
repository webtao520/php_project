<?php
/*
 __clone() 魔术方法
__clone() 方法不能够直接被调用，只有当通过 clone 关键字克隆一个对象时才可以使用该对象调用 __clone() 方法。
当创建对象的副本时，PHP 会检查 __clone() 方法是否存在。如果不存在，那么它就会调用默认的 __clone() 方法，复制对象的所有属性。
如果 __clone() 方法已经定义过，那么 __clone() 方法就会负责设置新对象的属性。所以在 __clone() 方法中，只需要覆盖那些需要更改的属性就可以了。

__clone() 方法不需要任何参数，下面通过一个示例来演示一下：
 */

class Website {
    public  $name,$url;
    public function __construct($name,$url)
    {
         $this->name=$name;
         $this->url=$url;
    }
    public function output(){
        echo $this->name.','.$this->url."<br>";
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->name="golang";
        $this->url="wwww";
    }
}
$obj  = new Website('C语言中文网', 'http://c.biancheng.net/php/');
$obj2 = clone $obj;
$obj  -> output();
$obj2 -> output();
