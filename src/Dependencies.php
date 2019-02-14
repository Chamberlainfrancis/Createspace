<?php 

	declare(strict_types = 1);
	
	$injector = new \Auryn\Injector;

	$injector->alias('Http\Request', 'Http\HttpRequest');
	$injector->share('Http\HttpRequest');
	$injector->define('Http\HttpRequest', [
		':get' => $_GET,
		':post' => $_POST,
		':cookies' => $_COOKIE,
		':files' => $_FILES,
		':server' => $_SERVER,
	]);

	$injector->alias('Http\Response', 'Http\HttpResponse');
	$injector->share('Http\HttpResponse');
	$injector->alias('Createspace\Template\Renderer', 'Createspace\Template\TwigRenderer');
	$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
			]),
		],
	]);
	$injector->define('Createspace\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
	]);

	$injector->alias('Createspace\Page\PageReader', 'Createspace\Page\FilePageReader');
	$injector->share('Createspace\Page\FilePageReader');
	
	$injector->delegate('Twig_Environment', function () use ($injector) {
		$loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/templates');
		$twig = new Twig_Environment($loader);
		return $twig;
	});
	$injector->alias('Createspace\Template\FrontendRenderer', 'Createspace\Template\FrontendTwigRenderer');
	
	$injector->alias('Createspace\Menu\MenuReader', 'Createspace\Menu\ArrayMenuReader');
	$injector->share('Createspace\Menu\ArrayMenuReader');

	return $injector;
	