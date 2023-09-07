<?php

declare(strict_types=1);

namespace Insiders\PhpCodingStandards\PhpCsFixer;

final class Rules
{
    public static function getRulesForPHP72(array $overrideRules = []): array
    {
        return \array_merge(self::getBasicPhpRules(), $overrideRules);
    }

    public static function getRulesForPHP73(array $overrideRules = []): array
    {
        $rules = [];

        return \array_merge(self::getRulesForPHP72($rules), $overrideRules);
    }

    public static function getRulesForPHP74(array $overrideRules = []): array
    {
        $rules = [
            '@PHP74Migration' => true,
            '@PHP74Migration:risky' => true,
        ];

        return \array_merge(self::getRulesForPHP73($rules), $overrideRules);
    }

    public static function getRulesForPHP80(array $overrideRules = []): array
    {
        $rules = [
            '@PHP80Migration' => true,
            '@PHP80Migration:risky' => true,
        ];

        return \array_merge(self::getRulesForPHP74($rules), $overrideRules);
    }

    public static function getRulesForPHP81(array $overrideRules = []): array
    {
        $rules = [
            '@PHP81Migration' => true,
        ];

        return \array_merge(self::getRulesForPHP80($rules), $overrideRules);
    }

    private static function getBasicPhpRules(): array
    {
        return [
            '@PHP70Migration' => true,
            '@PHP70Migration:risky' => true,
            '@PHP71Migration' => true,
            '@PHP71Migration:risky' => true,
            '@PSR2' => true,
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'combine_consecutive_unsets' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'echo_tag_syntax' => [
                'format' => 'long',
            ],
            'global_namespace_import' => [
                'import_classes' => false,
                'import_constants' => false,
                'import_functions' => false,
            ],
            'linebreak_after_opening_tag' => true,
            'native_function_invocation' => [
                'include' => ['@all'],
            ],
            'no_extra_blank_lines' => [
                'tokens' => [
                    'break',
                    'continue',
                    'extra',
                    'return',
                    'throw',
                    'use',
                    'parenthesis_brace_block',
                    'square_brace_block',
                    'curly_brace_block',
                ],
            ],
            'no_useless_else' => true,
            'no_useless_return' => true,
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
            ],
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_to_comment' => false,
            'phpdoc_no_empty_return' => false,
            'phpdoc_summary' => false,
            'strict_comparison' => true,
            'strict_param' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ];
    }
}
