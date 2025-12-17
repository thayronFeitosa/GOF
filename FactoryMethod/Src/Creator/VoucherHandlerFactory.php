<?php
namespace Src\Creator;

use Src\Contracts\ITransferHandler;
use Src\FactoryCreator\VoucherTransferHandler;

class VoucherHandlerFactory extends TransferHandlerFactory {
    public function createHandler(): ITransferHandler {
        return new VoucherTransferHandler();
    }
}