<?php


namespace libs;


class Currency
{
    public static function getData()
    {
        return json_decode(file_get_contents(API));
    }

    public static function getCurrencies()
    {
        $currencyArr = [];
        foreach (self::getData() as $currency) {
            if ($currency->cc !== "USD") {
                $currencyArr[] = [
                    'cc' => $currency->cc,
                    'txt' => $currency->txt,
                ];
            }
        }
        return $currencyArr;
    }

    public static function convertToDollar($sum, $curr)
    {
        $uah = self::getOneCurr('USD');
        $curr_current = self::getOneCurr($curr);
        if ($curr === 'UAH'){
            return $sum * $uah->rate;
        }
        foreach (self::getData() as $currency) {
            if ($currency->cc == $curr) {
                return $uah->rate / $curr_current->rate * $sum;
            }
        }
    }

    public static function getOneCurr($cc)
    {
        foreach (self::getData() as $data) {
            if ($data->cc === $cc) {
                return $data;
            }
        }
    }

}