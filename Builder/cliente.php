<?php
require __DIR__ . '/autoload.php';

use Src\Builders\SnackBuilder;
use Src\Enum\TypeBread;
use Src\Director\SnackDirectorBuilder;

function main()
{

    $builder = new SnackBuilder();
    $director = (new SnackDirectorBuilder($builder));

    $director->vegetarianSnach();

    $lanche = $builder->getSnack();
    $lanche->setTypeBread(TypeBread::AUSTRALIANO);
    $lanche->addCheese();
    $lanche->addCheese();
    $lanche->addCheese();

    $lanche->printSnackReceipt();
}


main();