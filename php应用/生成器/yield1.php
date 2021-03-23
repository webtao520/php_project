<?php
// 下面我们实现一个简单的函数用于生成一个范围内的数值，以此说明生成器是如何节省内存的。首先我们通过迭代器来实现：
/*
function makeRange($length) {
    $dataSet = [];
    for ($i=0; $i<$length; $i++) {
        $dataSet[] = $i;
    }
    return $dataSet;
}

$customRange = makeRange(1000000);
foreach ($customRange as $i) { // 迭代器
    echo $i . PHP_EOL;
}
*/


function makeRange($length) {
    for ($i=0; $i<$length; $i++) {
        yield $i; // 生成器
    }
}

foreach (makeRange(1000000) as $i) {
    echo $i . PHP_EOL; // 再次执行就可以毫无压力的打印出结果，因为生成器每次只需要为一个整数分配内存
}


//此外，一个常用的使用案例就是使用生成器迭代流资源（文件、音频等）。假设我们想要迭代一个大小为4GB的CSV文件，
//而虚拟私有服务器（VPS）只允许PHP使用1GB内存，因此不能把整个文件都加载到内存中，
//下面的代码展示了如何使用生成器完成这种操作：
/*
function getRows($file) {
    $handle = fopen($file, 'rb');
    if ($handle == FALSE) {
        throw new Exception();
    }
    while (feof($handle) === FALSE) {
        yield fgetcsv($handle);
    }
    fclose($handle);
}

foreach (getRows($file) as $row) {
    print_r($row);
}
*/