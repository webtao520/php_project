<?php
// 示例 #1 回调函数示例

// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

// Type 1: Simple callback 回调函数不止可以是简单函数，还可以是对象的方法，包括静态类方法。
call_user_func('my_callback_function');

// type2: static class method call
call_user_func(['MyClass','myCallbackMethod']);

// Type 3: Object method call
$obj= new MyClass();
call_user_func([$obj,'myCallbackMethod']);

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A

// Type 6: Objects implementing __invoke can be used as callables (since PHP 5.3)
class C {
    public function __invoke($name)
    {
        // TODO: Implement __invoke() method.
        echo 'new hello',$name,"\n";
    }
}
$c=new C();
call_user_func($c,'PHP!');