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
touch .php-cs-fixer.dist.php
```

.php-cs-fixer.dist.php
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
.php-cs-fixer.cache
```

## Execution
```
./vendor/bin/php-cs-fixer fix
```
or
```
./vendor/bin/php-cs-fixer --dry-run
```

## PhpStorm Setup

https://www.jetbrains.com/help/phpstorm/using-php-cs-fixer.html

Settings > PHP > Quality Tools > PHP CS Fixer > Config: Local, ... > Path: /Users/adambrown/Projects/factory-bucket-api/vendor/bin/php-cs-fixer

Settings > Tools > External Tools > New or Edit existing:
```
Name: PHP-CS Fixer
Program: $ContentRoot$/vendor/friendsofphp/php-cs-fixer/php-cs-fixer
Arguments: --config=$ContentRoot$/.php-cs-fixer.dist.php --verbose fix $FileDir$/$FileName$
Working Dir: $ContentRoot$/vendor/friendsofphp/php-cs-fixer

YES sync files
NO open console
```

Bind Opt/Cmd/L to already created PHP-CS Fixer External Tool
