<?php

namespace Src\Implementation\Contract;

interface IRenderer
{
    public function renderTitle(string $title): void;
    public function renderSection(string $title, array $data): void;
    public function renderFooter(string $text): void;
}
