<?php
// 上面的情况仅发生在你的子类里，没有额外定义一个同名静态属性的情况下，如果这样：
class Foo {
    protected static $instance='null';
    public static function setInstance ($ins){
        static::$instance = $ins;
    }
    public static function getInstance(){
        return static::$instance;
    }
}

class Bar extends  Foo {
    protected  static $instance;
}
class Baz extends Foo {
    protected  static $instance;
}


Bar::setInstance('golang');
echo Bar::getInstance() .'<br>';
echo Foo::getInstance() .'<br>';
// 这里我们在子类里面都额外定义了一个同名的$instance，这个时候就是各自的是各自的了，就不是共享了：
echo '<hr>';
Baz::setInstance('laravel');
echo Baz::getInstance() .'<br>';
echo Bar::getInstance() .'<br>';
echo Foo::getInstance() .'<br>';

/**
pilishen.com
null

laravel
pilishen.com
null

laravel里大量使用了静态属性，当然也包括静态调用绑定，那么你在查看源码的时候就要注意这一点喽~父类和子类是共享的一个静态属性吗？
还是子类里面有重新定义呢？子类更改静态属性，会影响父类吗？ sleeping

最简单的，laravel如何保证整个程序，那么多个类，他们在运行的时候都是用的同一个laravel实例本身呢？都是同一个$app呢？现在明白了吧~

 */