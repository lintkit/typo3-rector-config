<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;
use LintKit\Typo3RectorConfig\Set\LintKitSetList;

return static function (RectorConfig $rectorConfig): void {
	$rectorConfig->sets([
		LintKitSetList::GENERAL,
		Typo3LevelSetList::UP_TO_TYPO3_12,
	]);
};
