<?php
class Model
{
    public static function create(array $attributes = [])
    {
        $model = new static($attributes);

        $model->save();

        return $model;
    }
}

class Task extends Model{

}

Task::create([
    'title'=>'学习laravel',
    'author'=>'pilishen'
]);


/**
 * 当执行Task::create()的时候，因为extends了Model，所以就到了Model里的create方法，由于 $model = new static($attributes);
 * 使用了static关键词，所以此时也就相当于是执行了new Task();，
 * 也就是借助static静态绑定，我们在laravel里的自己创建的各个model，就可以共用一系列提前定义好的方法，
 * 同时在实际调用的时候，又将结果或过程只作用于自己，从而实现了一个典型的active record design pattern
 */