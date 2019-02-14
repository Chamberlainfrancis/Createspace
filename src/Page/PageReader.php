<?php declare(strict_types = 1);

namespace Createspace\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}
