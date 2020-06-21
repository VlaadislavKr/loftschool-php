<?php

include "../src/ServiceInterface.php";
include "../src/TariffInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";
include "../src/TariffStudent.php";

/** @var TariffInterface $tariff */
$tariff = new TariffStudent(5, 1);
$tariff->addService(new ServiceGPS());
$tariff->addService(new ServiceDriver());
echo $tariff->countPrice();