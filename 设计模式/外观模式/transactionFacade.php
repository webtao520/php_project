<?php
// 可以看到，一个流程呢包含了很多步骤，涉及到了很多Object，一旦类似环节要用在多个地方，可能就会导致问题，所以可以先创建一个外观类：
class transactionFacade {

    public $productID = '';

    public function __construct($pID) {
        $this->productID = $pID;
    }

    public function generateOrder() {

        if($this->qtyCheck()) {

            $this->addToCart();

            $this->calulateShipping();

            $this->applyDiscount();

            $this->placeOrder();

        }

    }

    private function addToCart () {
        /* .. add product to cart ..  */
    }

    private function qtyCheck() {

        $qty = 'get product quantity from database';

        if($qty > 0) {
            return true;
        } else {
            return true;
        }
    }


    private function calulateShipping() {
        $shipping = new shippingCharge();
        $shipping->calculateCharge();
    }

    private function applyDiscount() {
        $discount = new discount();
        $discount->applyDiscount();
    }

    private function placeOrder() {
        $order = new order();
        $order->generateOrder();
    }
}

$order = new transactionFacade($productID);
$order->generateOrder();

/**
        确实，在“包装”逻辑方面，它们确实类似，但是：

        修饰者模式（Decorator）——用来给一个Object添加、包裹上新的行为、逻辑，而不需要改动原来的代码

        外观模式（facade pattern）——用来给一个或多个复杂的子系统、或者第三方库，提供统一的入口，或者说统一的终端调用方式
 */