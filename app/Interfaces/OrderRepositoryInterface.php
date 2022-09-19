<?php

namespace App\Interfaces;

Interface OrderRepositoryInterface
{
    // Define functions here
    public function getAllOrders();
    public function getOrderById($orderId);
    public function deleteOrder($orderId);
    public function createOrder(array $orderDetail);
    public function updateOrder($orderId, array $orderDetail);
    public function getFulfilledOrder();
}
