<?php

namespace Anavel\Foundation\View\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Matcher\MatcherInterface;
use Knp\Menu\Renderer\RendererInterface;

abstract class SidebarMenuProvider
{
    protected $factory;
    protected $renderer;
    protected $matcher;

    public function __construct(FactoryInterface $factory, RendererInterface $renderer, MatcherInterface $matcher)
    {
        $this->factory = $factory;
        $this->renderer = $renderer;
        $this->matcher = $matcher;
    }

    abstract public function render();
}
