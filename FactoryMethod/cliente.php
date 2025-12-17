<?php

require __DIR__ . '/autoload.php';

use Src\Contracts\ITransferHandler;
use Src\Creator\OrderHandlerFactory;
use Src\Creator\VoucherHandlerFactory;

function clientCode(string | int $order): ITransferHandler {

    /** @var ITransferHandler $factory */
        $factory = null;

    $factory = is_numeric($order)
        ? new OrderHandlerFactory()
        : new VoucherHandlerFactory();

    return $factory->createHandler();
}


$order = '133aa70';
clientCode($order)->import($order);