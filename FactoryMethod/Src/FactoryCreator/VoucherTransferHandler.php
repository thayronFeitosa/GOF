<?php

namespace Src\FactoryCreator;

use Src\Contracts\ITransferHandler;

class VoucherTransferHandler implements ITransferHandler
{

    public function  import(string | int $order): mixed
    {
        echo "Importando um Voucher" . PHP_EOL;
        return $order;
    }

    public function export(string | int $order): mixed
    {
        echo  "Exporting Voucher in ODER format..." . PHP_EOL;
        return  $order;
    }
}
