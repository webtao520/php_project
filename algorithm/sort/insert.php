<?php
/**
 * php算法实战.
 *
 * 排序算法-插入排序
 *
 * author webtao520 <https://github.com/webtao520>
 */

/**
 *  插入排序
 * @param  array   $value 待排序数组
 * @param  integer $point 起始位置
 *
 * @return array
 */

function insert (&$value=[],$point=0){
      if ($point >=count($value) - 1){
          return ;
      }
      $next=$value[$point+1];//下一个待插入值
      // 从后向前遍历已排序数组
      for ($i=$point;$i>=0;--$i){
        // 如果当前已排序值大于 待插入值
        // 把当前值往后移动一位
          //继续向前遍历
          if ($value[$i] > $next) {
              // TODO
          }
      }
}