<?php

namespace Src\Creator;

use Src\Contracts\ITransferHandler;

abstract class TransferHandlerFactory implements ITransferHandler {
    abstract public function createHandler(): ITransferHandler;

    public function import(string|int $order): mixed {
        $handler = $this->createHandler();
        return $handler->import($order);
    }

    public function export(string|int $order): mixed {
        $handler = $this->createHandler();
        return $handler->export($order);
    }
}