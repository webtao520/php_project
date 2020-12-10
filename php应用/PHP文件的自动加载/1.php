<?php

function loadprint( $class ) {
    $file = $class . '.class.php';
    if (is_file($file)) {
        require_once($file);
    }
}

/*
    将__autoload换成loadprint函数。但是loadprint不会像__autoload自动触发，
    这时spl_autoload_register()就起作用了，它告诉PHP碰到没有定义的类就执行loadprint()。
 */
spl_autoload_register( 'loadprint' );
$obj = new PRINTIT();
$obj->doPrint();

