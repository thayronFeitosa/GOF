<?php

namespace Src\Abstraction;

class SalesReport extends Report
{
    protected function getTitle(): string
    {
        return 'Relatório de Vendas';
    }

    protected function getSections(): array
    {
        return [
            [
                'title' => 'Resumo',
                'data' => ['Total: R$ 10.000', 'Pedidos: 120']
            ],
            [
                'title' => 'Top Produtos',
                'data' => ['Notebook', 'Mouse', 'Teclado']
            ]
        ];
    }

    protected function getFooter(): string
    {
        return 'Gerado em ' . date('d/m/Y');
    }
}
