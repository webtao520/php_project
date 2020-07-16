<?php
/**
 * php算法实战
 * 排序算法-冒泡排序
 *
 * @author webtao520 <https://github.com/webtao520>
 */


/**
 * 冒泡排序
 * @param [] $value 待排序数组
 * @return []
 */
function bubble ($value =[]){
     $length=count($value)-1;
     // 外循环
     for ($j=0;$j<$length;++$j){
         echo "j=".$j."\n";
         // 内循环
         for ($i=0;$i<$length;++$i) {
             echo "i=".$i."\n";
             // 如果后一个值小于前一个值，则互换位置
             if ($value[$i+1] < $value[$i]){
                 $tmp=$value[$i+1];
                 $value[$i+1]=$value[$i];
                 $value[$i]=$tmp;
             }
         }
     }
     return $value;
}

print_r(bubble([1,0,4,34,54,5,9,15]));