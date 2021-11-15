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
