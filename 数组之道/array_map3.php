<?php
$order = [
    ['product_id' => 1, 'price' => 99, 'count' => 1],
    ['product_id' => 2, 'price' => 50, 'count' => 2],
    ['product_id' => 2, 'price' => 17, 'count' => 3],
];

$sum = array_sum(array_map(function ($product_row) {
    return $product_row['price'] * $product_row['count'];
}, $order));

print_r($sum); // 250
