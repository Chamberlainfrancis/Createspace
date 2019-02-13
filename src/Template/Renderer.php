<?php declare(strict_types = 1);

namespace Createspace\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}