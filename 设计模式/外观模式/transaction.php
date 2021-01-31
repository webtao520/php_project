<?php
//示例三：完成一个商品交易的复杂流程
//假设呢，一个商品交易环节需要有这么几步：
$productID = $_GET['productId'];
$qtyCheck = new productQty();

// 检查库存
if($qtyCheck->checkQty($productID) > 0) {

    // 添加商品到购物车
    $addToCart = new addToCart($productID);

    // 计算运费
    $shipping = new shippingCharge();
    $shipping->updateCharge();

    // 计算打折
    $discount = new discount();
    $discount->applyDiscount();

    $order = new order();
    $order->generateOrder();
}