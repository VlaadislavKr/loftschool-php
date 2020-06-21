<?php

class ServiceDriver implements ServiceInterface
{
    private $price = 100;

    public function apply(TariffInterface $tariff, &$price)
    {
        $price += $this->price;
    }
}