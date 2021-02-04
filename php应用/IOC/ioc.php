<?php

/*
class Superman {
    protected  $power;
    public  function  __construct()
    {
        //  在超人在创建的时候赋予一个超能力
         $this->power = new Power(999,100);
        /
         $this->power = new Force(45);
         $this->power = new Shot(99, 50, 2);

//        $this->power = array(
//            new Force(45),
//            new Shot(99, 50, 2)
//        );

    }
}
*/

/*
class Superman
{
    protected $power;

    public function __construct()
    {

//          在超人初始化之初，去初始化许多第三方类，只需初始化一个工厂类，即可满足需求。但这样似乎和以前区别不大，
//          只是没有那么多 new 关键字。其实我们稍微改造一下这个类，你就明白，工厂类的真正意义和价值了。

        // 初始化工厂
        $factory = new SuperModuleFactory;
        // 通过工厂提供的方法制造需要的模块
        $this->power = $factory->makeModule('Fight', [9, 100]);
        // $this->power = $factory->makeModule('Force', [45]);
        // $this->power = $factory->makeModule('Shot', [99, 50, 2]);
        $this->power = [
            $factory->makeModule('Force', [45]),
            $factory->makeModule('Shot', [99, 50, 2])
        ];
    }
}
*/

// 在进行改造
class Superman {
     protected  $power;
     public  function  __construct(array $modules)
     {
             // 初始化工厂
         $factory = new SuperModuleFactory();
         // 通过工厂提供的方法制造需要的模块
         foreach ($modules as $moduleName => $moduleOptions){
             $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
         }
     }
}

// 创造超人
$superman  = new Superman([
    'Fight'=>[9,100],
    'Shot'=>[99,50,2]
]);





/*
 我们可以想象，一个超人诞生的时候肯定拥有至少一个超能力，这个超能力也可以抽象为一个对象，为这个对象定义一个描述他的类吧。
 一个超能力肯定有多种属性、（操作）方法，这个尽情的想象，但是目前我们先大致定义一个只有属性的“超能力”，至于能干啥，我们以后再丰富：
 */

class  Power
{
    /**
     *   能力值
     */
    protected $ability;

    /**
     *   能力范围或距离
     */
    protected $range;

    public function __construct($ability, $range)
    {
        $this->ability = $ability;
        $this->range = $range;
    }
}


class Flight
{
    protected $speed;
    protected $holdtime;

    public function __construct($speed, $holdtime)
    {
    }
}

class Force
{
    protected $force;

    public function __construct($force)
    {
    }
}

class Shot
{
    protected $atk;
    protected $range;
    protected $limit;

    public function __construct($atk, $range, $limit)
    {
    }
}


/*
    我们不应该手动在 “超人” 类中固化了他的 “超能力” 初始化的行为，而转由外部负责，由外部创造超能力模组、
    装置或者芯片等（我们后面统一称为 “模组”），植入超人体内的某一个接口，这个接口是一个既定的，只要这个 “模组”
    满足这个接口的装置都可以被超人所利用，可以提升、增加超人的某一种能力。这种由外部负责其依赖需求的行为，
    我们可以称其为 “控制反转（IoC）”。
 */


class SuperModuleFactory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Fight':
                return new Fight($options[0], $options[1]);
            case 'Force':
                return new Force($options[0]);
            case 'Shot':
                return new Shot($options[0], $options[1], $options[2]);
        }
    }
}








