<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Ssch\TYPO3Rector\Set\Typo3SetList;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Ssch\TYPO3Rector\CodeQuality\General\ConvertImplicitVariablesToExplicitGlobalsRector;
use Ssch\TYPO3Rector\CodeQuality\General\GeneralUtilityMakeInstanceToConstructorPropertyRector;

return static function (RectorConfig $rectorConfig): void {
	$rectorConfig->indent("\t", 1);

	$rectorConfig->paths([
		'./app',
		'./config'
	]);

	/**
	 * Sets
	 */

	// Add Sets
	$rectorConfig->sets([
		SetList::DEAD_CODE,
		Typo3SetList::CODE_QUALITY,
		Typo3SetList::GENERAL,
	]);

	/**
	 * Rules
	 */

	// Add Rules 
	$rectorConfig->rules([
		// Rector
		StringClassNameToClassConstantRector::class,
		InlineConstructorDefaultToPropertyRector::class,
		AddVoidReturnTypeWhereNoReturnRector::class,

		// TYPO3 Rector
		ConvertImplicitVariablesToExplicitGlobalsRector::class,
	]);

	// Remove Rules
	$rectorConfig->skip([
		// TYPO3 Rector
		GeneralUtilityMakeInstanceToConstructorPropertyRector::class
	]);
};
