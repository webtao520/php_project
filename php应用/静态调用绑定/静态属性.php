<?php
// 为了测试这只是静态属性的问题，也即证明一下我们传统的关于属性继承的思路没错，我们改一下：
class Foo {
    protected $instance='Null';
    public function  setInstance($ins){
        $this->instance=$ins;
    }
    public function  getInstance(){
        return $this->instance;
    }
}

class Bar extends Foo {

}

class Baz extends Foo {

}

$bar = new Bar;
$bar->setInstance('pilishen.com');
echo $bar->getInstance() .'<br>';
echo (new Foo)->getInstance() .'<br>';

echo '<hr>';
$baz = new Baz;
$baz->setInstance('laravel');
echo $baz->getInstance() .'<br>';
echo $bar->getInstance() .'<br>';
echo (new Foo)->getInstance() .'<br>';
/**
尽管我们在子类里可以获取它，可以修改它，但是这个它，指向的都是父类里的那个静态属性，确实是子类能改变父类，
 * 子类能改变子类。也或者说，所有的父类和子类，都是共享这一个静态属性。
 */

/**
PS D:\phpstudy_pro\www\php_project\php应用\静态调用绑定> php 静态属性.php
pilishen.com<br>Null<br><hr>laravel<br>pilishen.com<br>Null<br>
 */