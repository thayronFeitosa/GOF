<?php

namespace Src\Abstraction;

class FinancialReport extends Report
{
    protected function getTitle(): string
    {
        return 'Relatório Financeiro';
    }

    protected function getSections(): array
    {
        return [
            [
                'title' => 'Receitas',
                'data' => ['Janeiro: R$ 50.000', 'Fevereiro: R$ 47.000']
            ],
            [
                'title' => 'Despesas',
                'data' => ['Aluguel', 'Folha de pagamento']
            ]
        ];
    }

    protected function getFooter(): string
    {
        return 'Confidencial';
    }
}
