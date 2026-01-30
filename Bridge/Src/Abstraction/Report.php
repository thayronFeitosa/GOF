<?php

namespace Src\Abstraction;

use Src\Implementation\Contract\IRenderer;

abstract class Report
{
    protected IRenderer $renderer;

    public function __construct(IRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    final public function generate(): void
    {
        $this->renderer->renderTitle($this->getTitle());

        foreach ($this->getSections() as $section) {
            $this->renderer->renderSection(
                $section['title'],
                $section['data']
            );
        }

        $this->renderer->renderFooter($this->getFooter());
    }

    abstract protected function getTitle(): string;
    abstract protected function getSections(): array;
    abstract protected function getFooter(): string;
}
