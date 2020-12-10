<?php
// PHP文件的自动加载（autoloading）
/*
    传统上，在PHP里，当我们要用到一个class文件的时候，我们都得在文档头部require或者include一下：
    <?php
    require_once('../includes/functions.php');
    require_once('../includes/database.php');
    require_once('../includes/user.php');
    ...
    但是一旦要调用的文档多了，就得每次都写一行，瞅着也不美观，有什么办法能让PHP文档自动加载呢？

    <?php
    function __autoload($class_name)
    {
       require "./{$class_name}.php";
    }

    对，可以使用PHP的魔法函数__autoload()，上面的示例就是自动加载当前目录下的PHP文件。当然，实际当中，我们更可能会这么来使用：


    function __autoload($class_name){
         $name = strtolower($class_name);
         $path="../includes/{$name}.php";
         if (file_exists($path)){
              require_once ($path);
         }else{
             die("the file {$class_name} could not be found");
         }
    }

    也即是做了一定的文件名大小写处理，然后在require之前检查文件是否存在，不存在的话显示自定义的信息。

    类似用法经常在私人项目，或者说是单一项目的框架中见到，为什么呢？因为你只能定义一个__autoload function，
    在多人开发中，做不到不同的developer使用不同的自定义的autoloader,除非大家都提前说好了，都使用一个__autoload，涉及到改动了就进行版本同步，这很麻烦。

    也主要是因为此，有个好消息，就是这个__autoload函数马上要在7.2版本的PHP中弃用了。

    Warning This feature has been DEPRECATED as of PHP 7.2.0. Relying on this feature is highly discouraged.

        spl_autoload_register(function ($class_name){
             require_once ('...');
        });

        // 使用一个全局函数
        function Custom(){
            require_once('...');
        }
        spl_autoload_register("Custom");

        // 使用一个class 当中的static方法
        class MyCustomAutoloader {
            static  public function  myLoader(class_name){
                require_once ('');
            }
        }

        //传array进来，第一个是class名，第二个是方法名
        spl_autoload_register(['MyCustomAutoloader','myLoader']);


        //甚至也可以用在实例化的object上
        class MyCustomAutoloader
        {
            public function myLoader($class_name)
            {
            }
        }

        $object = new MyCustomAutoloader;
        spl_autoload_register([$object,'myLoader']);


    那么取而代之的是一个叫spl_autoload_register()的东东，它的好处是可以自定义多个autoloader.

    值得一提的是，使用autoload，无论是__autoload(),还是spl_autoload_register(),相比于require或include,好处就是autoload机制是lazy loading(延迟加载)，
    也即是并不是你一运行就给你调用所有的那些文件，而是只有你用到了哪个，比如说new了哪个文件以后，才会通过autoload机制去加载相应文件。


 */

spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

