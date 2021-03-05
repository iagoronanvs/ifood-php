<?php

require __DIR__ . '/vendor/autoload.php';

$ifood = new Iagoronanvs\Ifood("b2f31938-560b-41eb-8f04-23d8c225d9a3");

print_r($ifood->menu());