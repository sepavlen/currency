<?php


namespace app\controllers;


use libs\Currency;

class IndexController
{
    public function __construct()
    {
        $sum = '';
        $convert_sum = '';

        if (!empty($_POST)){
            $sum = $_POST['sum'];
            $curr = $_POST['curr'];
            $convert_sum = number_format(Currency::convertToDollar($sum, $curr), 2);
        }

        $currencies = Currency::getCurrencies();
        view('index', compact('currencies', 'sum', 'convert_sum', 'curr'));
    }
}