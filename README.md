## Style Guide
https://mlocati.github.io/php-cs-fixer-configurator

## Installation:
composer.json
```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/iadambrown/php-cs-styles.git"
    },
],
```

Terminal:
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

.gitignore
```
.php_cs.cache
```

PhpStorm Setup: 
https://www.jetbrains.com/help/phpstorm/using-php-cs-fixer.html

## Execution
```
./vendor/bin/php-cs-fixer fix
```
or
```
./vendor/bin/php-cs-fixer --dry-run
```
