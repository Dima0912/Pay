<?php
require_once $_SERVER['DOCUMENT_ROOT']."/interface.php";

abstract class CreatePayment
{
    abstract function create(): Payment;

    public function SumAndCurency()
    {
        $sum = $this->create()->sum();
        $currency = $this->create()->currency();
        return compact('sum', 'currency');
    }
}
