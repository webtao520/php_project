<?php

// callStatic例子
class Member
{
    protected static $memberdata = array();

    public static function callStatic($func, $arguments)
    {
        list($type, $name) = explode('_', $func);
        if (!in_array($type, array('set', 'get')) || $name == '') {
            return '';
        }

        $feature = get_called_class();
        switch ($type) {
            case 'set':
                self::$memberdata[$feature][$name] = $arguments[0];
                break;
            case 'get':
                return isset(self::$memberdata[$feature][$name]) ? self::$memberdata[$feature][$name] : '';
                break;
            default:
        }
    }
}


class User extends Member
{
    public static function show()
    {
        $feature = get_called_class();
        if (self::$memberdata[$feature]) {
            foreach (self::$memberdata[$feature] as $key => $member) {
                echo $key . ':' . $member . '';
            }
        }
    }
}


class Profession extends Member
{
    public static function show()
    {
        $feature = get_called_class();
        if (self::$memberdata[$feature]) {
            foreach (self::$memberdata[$feature] as $key => $member) {
                echo $key . ':' . $member . '';
            }
        }
    }
}


User::set_name('fdipzone');
User::set_age(29);
User::show();



Profession::set_profession('IT SERVICE');
Profession::set_price(2500);
Profession::show();