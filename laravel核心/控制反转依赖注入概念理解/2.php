<?php
// 定义写日志的接口规范
interface  log {
    public  function   write();
}

// 文件记录日志
class  FileLog implements Log {
    public function write()
    {
        // TODO: Implement write() method.
        echo 'file log write...';
    }
}

// 数据库记录日志
class  DatabaseLog  implements Log{
    public  function write()
    {
        // TODO: Implement write() method.
        echo 'database log write...';
    }
}

class User {
    protected  $log;
    public  function __construct(log $log) // 依赖注入，不是由自己内部new对象或者实例，通过构造函数，或者方法传入的都属于 依赖注入（DI）
    {
        $this->log=$log;
    }

    public function login(){
        // 登陆成功，记录登陆日志
        echo 'login success...';
        $this->log->write();
    }
}

$user=new User(new DatabaseLog());
$user->login(); // login success...database log write...
