<?php

// last reviewed: N/A

// RULES: https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16

return [
    '@PSR2'                                       => true,
    'array_indentation'                           => true,
    'array_syntax'                                => ['syntax' => 'short'],
    'binary_operator_spaces'                      => [
        'operators' => [
            '=>' => 'align_single_space_minimal',
            '='  => 'align_single_space_minimal',
        ],
    ],
    'blank_line_before_return'                    => true,
    'braces'                                      => [
        'allow_single_line_closure' => true,
    ],
    'cast_spaces'                                 => true,
    'class_definition'                            => ['singleLine' => true],
    'combine_consecutive_unsets'                  => true,
    'concat_space'                                => ['spacing' => 'one'],
    'declare_equal_normalize'                     => true,
    'final_class'                                 => false,
    'function_typehint_space'                     => true,
    'hash_to_slash_comment'                       => true,
    'include'                                     => true,
    'lowercase_cast'                              => true,
    'method_separation'                           => true,
    'native_function_casing'                      => true,
    // 'new_with_braces' => true,
    'no_multiline_whitespace_before_semicolons'   => true,
    'no_blank_lines_after_class_opening'          => true,
    'no_blank_lines_after_phpdoc'                 => true,
    'no_empty_comment'                            => true,
    'no_empty_phpdoc'                             => true,
    'no_empty_statement'                          => true,
    'no_extra_consecutive_blank_lines'            => [
        'curly_brace_block',
        'extra',
        'parenthesis_brace_block',
        'square_brace_block',
        'throw',
        'use',
    ],
    'no_leading_import_slash'                     => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_singleline_whitespace_before_semicolons'  => true,
    'no_spaces_around_offset'                     => true,
    'no_whitespace_before_comma_in_array'         => true,
    'no_whitespace_in_blank_line'                 => true,
    'object_operator_without_whitespace'          => true,
    'phpdoc_align'                                => true,
    'return_type_declaration'                     => true,
    'single_quote'                                => true,
    'single_blank_line_before_namespace'          => true,
    'ternary_operator_spaces'                     => true,
    'trailing_comma_in_multiline_array'           => true,
    'trim_array_spaces'                           => true,
    'unary_operator_spaces'                       => true,
    'whitespace_after_comma_in_array'             => true,
];
