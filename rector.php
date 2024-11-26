<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;
use Ssch\TYPO3Rector\Set\Typo3SetList;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;
use Ssch\TYPO3Rector\TYPO311\v5\SimplifyCheckboxItemsTCARector;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Ssch\TYPO3Rector\CodeQuality\General\ConvertImplicitVariablesToExplicitGlobalsRector;

$config = new RectorConfig();

$config->indent("\t", 1);

return $config::configure()

	->withPaths([
		__DIR__ . '/app',
		__DIR__ . '/config',
		// __DIR__ . '/html/typo3conf',
	])

	->withSets([
		Typo3SetList::CODE_QUALITY,
		Typo3SetList::GENERAL,
	])

	// Rector
	->withRules([
		StringClassNameToClassConstantRector::class,
		InlineConstructorDefaultToPropertyRector::class,
		AddVoidReturnTypeWhereNoReturnRector::class,
	])

	// TYPO3 Rector
	->withRules([
		ConvertImplicitVariablesToExplicitGlobalsRector::class,
	])

	->withSkip([
		SimplifyCheckboxItemsTCARector::class,
	])

	->withPhpVersion(PhpVersion::PHP_82)

	->withSets([
		Typo3LevelSetList::UP_TO_TYPO3_12,
	])
;
