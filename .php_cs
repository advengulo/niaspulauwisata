<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/app')
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
        'combine_consecutive_unsets' => true,
        'yoda_style' => true,
        'php_unit_construct' => true,
        'no_extra_consecutive_blank_lines' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block'],
        'single_quote' => true,
        'strict_comparison' => false,
        'strict_param' => true,
    ])
    ->setFinder($finder)
;