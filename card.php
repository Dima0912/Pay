<?php
require_once $_SERVER['DOCUMENT_ROOT']."/interface.php";
require_once $_SERVER['DOCUMENT_ROOT']."/abstract.php";


class Card extends CreatePayment
{
    public function create(): Payment
    {
        return new CreditRender();
    }
}

class CreditRender implements Payment
{

    public function sum()
    {
        return '1000';
    }

    public function currency()
    {
        return 'Credit card';
    }
}
