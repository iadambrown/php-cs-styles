<?php

namespace iAdamBrown\PhpCsStyles;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    $config = new Config();
    return $config->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
