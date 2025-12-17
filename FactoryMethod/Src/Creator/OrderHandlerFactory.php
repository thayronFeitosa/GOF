<?php

namespace Src\Creator;

use Src\Contracts\ITransferHandler;
use Src\FactoryCreator\OrderTransferHandler;

class OrderHandlerFactory extends TransferHandlerFactory {
    public function createHandler(): ITransferHandler {
        return new OrderTransferHandler();
    }
}