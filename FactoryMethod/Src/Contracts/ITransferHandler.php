<?
namespace Src\Contracts;

interface ITransferHandler {
    public function import(String | int $order): mixed;
    public function export(String | int $order): mixed;
}
