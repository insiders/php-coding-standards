# Insiders PHP Coding Standards

## Installation

```bash
composer require --dev insiders/php-coding-standards
```

## Usage

Place a file named `.php_cs.dist` that has the following content in your project root directory.

```php
<?php

declare(strict_types=1);

use Insiders\PhpCodingStandards\PhpCsFixer\Rules;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return Config::create()
    // use specific rules for your php version, see Rules class for reference
    ->setRules(Rules::getRulesForPHP72())
    ->setRiskyAllowed(true)
    ->setFinder(Finder::create()->in(__DIR__));
```

### Manual execute

Run following command in your project to fix every `.php` file.

```bash
./vendor/bin/php-cs-fixer fix
```
