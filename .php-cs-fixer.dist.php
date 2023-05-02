<?php 

$year = date('Y');

$header = <<< EOF
 Copyright (c) $year dflydev.
 
 For the full copyright and license information, please view
 the LICENSE.md file that was distributed with this source code.

 @see https://github.com/dflydev/dflydev-php-coding-standards
EOF;

use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Dflydev\PhpCsFixer\Config\RuleSet\Dflydev($header));

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

return $config;    