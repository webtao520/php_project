<?php
// 非静态环境下使用 static::
class A {
    private function foo(){
        echo "success!\n";
    }
    public function test(){
        $this->foo();
        static ::foo(); // 后期静态绑定的解析会一直到取得一个完全解析了的静态调用为止。另一方面，如果静态调用使用 parent:: 或者 self:: 将转发调用信息。
    }
}

class B extends A {
    /* foo() will be copied to B, hence its scope will still be A and
      * the call be successful */
}

class C extends A {
    private function foo(){
        /* original method is replaced; the scope of the new one is C */
    }
}

$b=new B();
$b->test();

$c=new C();
$c->test();

/**
success!
success!
success!

Fatal error:  Call to private method C::foo() from context 'A' in /tmp/test.php on line 9
 */