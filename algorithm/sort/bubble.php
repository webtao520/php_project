<?php
/**
 * php算法实战
 * 排序算法-冒泡排序
 *
 * @author webtao520 <https://github.com/webtao520>
 */


/**
 * 冒泡排序
 * @param array $value 待排序数组
 * @return array
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

/**
 *  优化冒泡排序1
 * @param array $value 待排序数组
 * @return array
 */
function bubble_better1($value =[]){
     $flag=true; // 标识 排序未完成
     $length=count($value)-1; // 数组最后一个元素索引
     $index=$length; // 最后一次交换的索引位置，初始值为最后一位
     while($flag){
         $flag=false;// 假设排序已完成
         for ($i=0;$i<$index;$i++){
             if($value[$i] > $value[$i+1]){
                  $flag=true; // 如果还有交换发生，则排序未完成
                  $last=$i; // 记录最后一次发生交换的索引位置
                  $tmp=$value[$i];
                  $value[$i]=$value[$i+1];
                  $value[$i+1]=$tmp;

             }
         }
         $index=!$flag?:$last;
     }
     return  $value;
}

/**
 *  优化冒泡排序2
 * @param array $value 待排序数组
 * @return array
 */
function bubble_better2($value =[]){
    if (count($value) <= 1) {
        return $value;
    }

    for ($i = 0; $i < count($value); $i++) {
        $flag = false;
        for ($j = 0; $j < count($value) - $i - 1; $j++) {
            if ($value[$j] > $value[$j+1]) {
                $temp  = $value[$j];
                $value[$j] = $value[$j+1];
                $value[$j+1] = $temp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }

    return $value;
}

$data=[1,0,4,34,54,5,9,15];

echo "==========================冒泡排序========================= \n";
echo "\n";
print_r($data);
echo "\n";
echo "=========上为初始值==================下为排序后值============= \n";
echo "\n";
print_r(bubble($data));
echo "\n";
echo "==========================优化排序后值1========================= \n";
print_r(bubble_better1($data));
echo "\n";
echo "==========================优化排序后值2========================= \n";
print_r(bubble_better2($data));
exit();


