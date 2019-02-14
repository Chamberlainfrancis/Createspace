<?php declare(strict_types = 1);

namespace Createspace\Menu;

interface MenuReader
{
    public function readMenu() : array;
}