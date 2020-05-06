### Style Guide
https://mlocati.github.io/php-cs-fixer-configurator

### Installation:
```
composer require iadambrown/php-cs-styles --dev
touch .php_cs.dist
```

.php_cs.dist
```
<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

return iAdamBrown\PhpCsStyles\styles($finder);
```
