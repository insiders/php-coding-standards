# Insiders PHP Coding Standards

## Installation

```bash
composer require --dev insiders/php-coding-standards
```

## Usage

Place a file named `.php-cs-fixer.dist.php` that has the following content in your project root directory.

```php
<?php

declare(strict_types=1);

use Insiders\PhpCodingStandards\PhpCsFixer\Rules;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRules(Rules::getRulesForPHP72())
    ->setRiskyAllowed(true)
    ->setFinder(Finder::create()->in(__DIR__))
    ->setCacheFile('.php-cs-fixer.cache');
```

### Manual execute

Run following command in your project to fix every `.php` file.

```bash
./vendor/bin/php-cs-fixer fix
```
