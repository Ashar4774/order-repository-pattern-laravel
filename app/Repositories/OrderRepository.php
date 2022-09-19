<?php

namespace App\Repositories;

use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($orderId)
    {
        return Order::findOrFail($orderId);
    }

    public function deleteOrder($orderId)
    {
        return Order::destroy($orderId);
    }

    public function createOrder(array $orderDetail)
    {
        return Order::create($orderDetail);
    }

    public function updateOrder($orderId, array $orderDetail)
    {
        return Order::whereId($orderId)->update($orderDetail);
    }

    public function getFulfilledOrder()
    {
        return Order::where('is_fulfilled', true)->get();
    }
}
