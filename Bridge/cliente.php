<?php

use Src\Abstraction\FinancialReport;
use Src\Abstraction\SalesReport;
use Src\Implementation\HtmlRenderer;
use Src\Implementation\PdfRenderer;

require __DIR__ . '/autoload.php';

$renderer = new PdfRenderer();
$report = new SalesReport($renderer);
$report->generate();

echo "\n";

$renderer = new HtmlRenderer();
$report = new FinancialReport($renderer);
$report = new SalesReport($renderer);

$report->generate();
