<?php

namespace Src\Implementation;

use Src\Implementation\Contract\IRenderer;

class PdfRenderer implements IRenderer
{
    public function renderTitle(string $title): void
    {
        echo "[PDF] ## {$title}\n";
    }

    public function renderSection(string $title, array $data): void
    {
        echo "[PDF] {$title}\n";
        foreach ($data as $item) {
            echo "[PDF] - {$item}\n";
        }
    }

    public function renderFooter(string $text): void
    {
        echo "[PDF] {$text}\n";
    }
}
