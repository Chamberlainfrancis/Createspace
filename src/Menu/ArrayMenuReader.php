<?php declare(strict_types = 1);

namespace Createspace\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
			['href' => '/about', 'text' => 'About'],
			['href' => '/sample.txt', 'text' => 'Page One'],
        ];
		
    }
}