# LintKit: TYPO3 Rector Config

Liquid Light base configuration for PHP

## Usage

Install the dependency:

```bash
composer require --dev lintkit/typo3-rector-config
```

Add the scripts:

```json
"scripts": {
    "rector:fix": "rector --config vendor/lintkit/typo3-v12.php",
    "rector": "@rector:fix --dry-run"
},
```

**Note:** You can adjust your config to be different TYPO3 versions - check the root of the repo to see what is available
