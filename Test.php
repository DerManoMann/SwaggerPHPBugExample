<?php

namespace SwaggerTest;

use OpenApi\Analysers\AttributeAnnotationFactory;
use OpenApi\Analysers\DocBlockAnnotationFactory;
use OpenApi\Analysers\ReflectionAnalyser;
use OpenApi\Generator;
use OpenApi\Processors\CleanUnusedComponents;

require __DIR__ . '/../vendor/autoload.php';

$generator = (new Generator())
	->setAnalyser(new ReflectionAnalyser([new DocBlockAnnotationFactory(), new AttributeAnnotationFactory()]))
	->setProcessors([
		...(new Generator())->getProcessors(),
		new CleanUnusedComponents()
	]);

$search_paths = ['Path1', 'Path2'];

$open_api = $generator->generate($search_paths);
$open_api->saveAs('openapi.yaml');

