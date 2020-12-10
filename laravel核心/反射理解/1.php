<?php

// 定义写日志的接口规范
interface log
{
    public function write();
}

// 文件记录日志
class FileLog implements Log
{
    public function write()
    {
        echo 'file log write...';
    }
}

class User
{
    protected $log;

    public function __construct(FileLog $log)
    {
        $this->log = $log;
    }

    public function login()
    {
        // 登录成功，记录登录日志
        echo 'login success...';
        $this->log->write();
    }

}

function make($concrete)
{

    $reflector = new ReflectionClass($concrete);
    $constructor = $reflector->getConstructor();
    // 为什么这样写的? 主要是递归。比如创建FileLog不需要传入参数。
    if (is_null($constructor)) {
        return $reflector->newInstance();
    } else {
        // 构造函数依赖的参数
        $dependencies = $constructor->getParameters();
        // 根据参数返回实例，如FileLog
        $instances = $this->getDependencies($dependencies);
        return $reflector->newInstanceArgs($instances);
    }

}

function getDependencies($paramters)
{
    $dependencies = [];
    foreach ($paramters as $paramter) {
        $dependencies[] = make($paramter->getClass()->name);
    }
    return $dependencies;
}

$user = make('User');
$user->login();