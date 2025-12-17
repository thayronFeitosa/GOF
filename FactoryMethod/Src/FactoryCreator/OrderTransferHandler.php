<?php 

namespace Src\FactoryCreator;

use Src\Contracts\ITransferHandler;

class OrderTransferHandler implements ITransferHandler {
    public function import(string | int $order): mixed 
    {
        echo "Importing order in ODER format..." . PHP_EOL;
        return $order;
    }
    public function export(String | int $order): mixed {
        echo "Exporting order in ODER format..." . PHP_EOL;
        return $order;
    }

}