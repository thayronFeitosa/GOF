<?php

namespace Src\Implementation;

use Src\Implementation\Contract\IRenderer;

class HtmlRenderer implements IRenderer
{
    public function renderTitle(string $title): void
    {
        echo "<h1>{$title}</h1>\n";
    }

    public function renderSection(string $title, array $data): void
    {
        echo "<h2>{$title}</h2>\n<ul>";
        foreach ($data as $item) {
            echo "<li>{$item}</li>";
        }
        echo "</ul>\n";
    }

    public function renderFooter(string $text): void
    {
        echo "<footer>{$text}</footer>\n";
    }
}
