<?php
class  A  {
    public  static  function  who(){
        echo __CLASS__; // A
    }
    public static  function test(){
        //self::who();
        static ::who(); // 后期静态绑定  我们可以用一个static关键词，来获取到运行当中、实际调用这个静态方法的类
    }
}

//现在呢，我们再创建一个class B，让它去扩展A:
class B extends A {
    public static function who(){
        echo "使用后期静态绑定执行到我了";
        echo __CLASS__;
    }
}



echo A::test(); // A
echo "_";
echo (new B)->test(); // A  因为self关键词只能取到定义当前方法所在的类，或者说它只能取到自己所在的那个类。

