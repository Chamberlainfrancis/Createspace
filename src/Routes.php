<?php 

declare(strict_types = 1);

return [
    ['GET', '/', ['Createspace\Controllers\Homepage', 'show']],
	['GET', '/about', ['Createspace\Controllers\About', 'show']],
	['GET', '/{slug}', ['Createspace\Controllers\Page', 'show']],
];