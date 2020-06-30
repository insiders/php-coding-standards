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
        $rules = [];

        return \array_merge(self::getRulesForPHP73($rules), $overrideRules);
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
            'linebreak_after_opening_tag' => true,
            'native_function_invocation' => true,
            'no_extra_blank_lines' => [
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
            'no_short_echo_tag' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'ordered_imports' => true,
            'phpdoc_align' => false,
            'phpdoc_no_empty_return' => false,
            'phpdoc_summary' => false,
            'strict_comparison' => true,
            'strict_param' => true,
            'yoda_style' => false,
        ];
    }
}
