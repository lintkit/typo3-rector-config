<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use LintKit\Typo3RectorConfig\Set\LintKitSetList;

return RectorConfig::configure()
	->withSets([
		LintKitSetList::UP_TO_TYPO3_11
	])
;
