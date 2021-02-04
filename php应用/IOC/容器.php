<?php
interface SuperModuleInterface
{
    /**
     * 超能力激活方法
     *
     * 任何一个超能力都得有该方法，并拥有一个参数
     * @param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target);
}


/**
 * X-超能量
 */
class XPower implements SuperModuleInterface
{
    public function activate(array $target)
    {
        // 这只是个例子。。具体自行脑补
    }
}

/**
 * 终极炸弹 （就这么俗）
 */
class UltraBomb implements SuperModuleInterface
{
    public function activate(array $target)
    {
        // 这只是个例子。。具体自行脑补
    }
}


class Superman
{
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }

}


/*
$superModule = new XPower;
$superMan = new Superman($superModule);
var_dump($superMan);
exit;
*/


// ==========  IoC 容器 ========

class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
//        print_r($this->binds);exit;
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);
//        echo "<pre>";
//        print_r($parameters);
//        exit;
        return call_user_func_array($this->binds[$abstract], $parameters);
    }

}

// 这时候，一个十分粗糙的容器就诞生了。现在的确很简陋，但不妨碍我们进一步提升他。先着眼现在，看看这个容器如何使用吧！

// 创建一个容器（后面称作超级工厂）
$container = new Container;

// 向该 超级工厂 添加 超人 的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});

// 向该 超级工厂 添加 超能力模组 的生产脚本
$container->bind('xpower', function($container) {
    return new XPower;
});

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});

// ******************  华丽丽的分割线  **********************
// 开始启动生产
$superman_1 = $container->make('superman', ['xpower']);
$superman_2 = $container->make('superman', ['ultrabomb']);
$superman_3 = $container->make('superman', ['xpower']);

var_dump($superman_2);