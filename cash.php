<?php
require_once $_SERVER['DOCUMENT_ROOT']."/interface.php";
require_once $_SERVER['DOCUMENT_ROOT']."/abstract.php";


class Cash extends CreatePayment
{
    public function create(): Payment
    {
        return new CashRender();
    }
}

class CashRender implements Payment
{

    public function sum()
    {
        return '500';
    }

    public function currency()
    {
        return 'Cash';
    }
}