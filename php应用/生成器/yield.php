<?php

/*
  生成器的创建方式很简单，因为生成器就是PHP函数，只不过要在函数中一次或多次使用 yield 关键字。
  与普通的PHP函数不同的是，生成器从不返回值，只产出值。下面是一个简单的生成器实现：
 */

function getLaravelAcademy() {
    yield 'http://LaravelAcademy.org';
    yield 'Laravel学院';
    yield 'Laravel Academy';
}

/*
    很简单吧！调用此生成器函数时，PHP会返回一个属于Generator类的对象，这个对象可以使用foreach函数迭代，
    每次迭代，PHP会要求Generator实例计算并提供下一个要迭代的值。生成器的优雅体现在每次产出一个值之后，
    生成器的内部状态都会停顿；向生成器请求下一个值时，内部状态又会恢复。生成器内部的状态会一直在停顿和恢复之间切换，
    直到抵达函数定义体的末尾或遇到空的return语句为止。我们可以使用下面的代码调用并迭代上面定义的生成器：
 */

foreach(getLaravelAcademy() as $yieldedValue) {
    echo $yieldedValue, PHP_EOL;
}