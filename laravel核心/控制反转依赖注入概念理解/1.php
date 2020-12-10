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

// 程序操作类
class User {
     protected $fileLog;
     public function __construct()
     {
          $this->fileLog=new FileLog();
     }
     public function login(){
         // 登陆成功，记录登陆日志
         echo 'login success...';
         $this->fileLog->write();
     }
}

$user = new User();
$user->login(); // login success...file log write...




