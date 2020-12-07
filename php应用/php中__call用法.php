<?php
/**
 * php 5.3 后新增了 call 与callStatic 魔法方法。
 * call 当要调用的方法不存在或权限不足时，会自动调用call 方法。
 *
 * callStatic 当调用的静态方法不存在或权限不足时，会自动调用callStatic方法。
 *
 * call($funcname, $arguments)
 *
 * callStatic($funcname, $arguments)
 *
 * 参数说明：
 *
 * $funcname String 调用的方法名称。
 *
 * $arguments Array 调用方法时所带的参数。
 */

// call 例子
class Member
{
    protected $memberdata = array();

    public function call($func, $arguments)
    {
        list($type, $name) = explode('_', $func);
        if (!in_array($type, array('set', 'get')) || $name == '') {
            return '';
        }
        switch ($type) {
            case 'set':
                $this->memberdata[$name] = $arguments[0];
                break;
            case 'get':
                return isset($this->memberdata[$name]) ? $this->memberdata[$name] : '';
                break;
            default:
        }
    }
}


class User extends Member
{
    public function show()
    {

        if ($this->memberdata) {

            foreach ($this->memberdata as $key => $member) {

                echo $key . ':' . $member . '';

            }
        }
    }
}


class Profession extends Member
{

    public function show()
    {
        if ($this->memberdata) {

            foreach ($this->memberdata as $key => $member) {

                echo $key . ':' . $member . '';
            }
        }
    }
}


$userobj = new User();
$userobj->set_name('fdipzone');
$userobj->set_age(29);
$userobj->show();

$probj = new Profession();
$probj->set_profession('IT SERVICE');
$probj->set_price(2500);
$probj->show();