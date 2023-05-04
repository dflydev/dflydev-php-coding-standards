<?php 

use Ergebnis\License;

$license = License\Type\MIT::text(__DIR__ . '/LICENSE',
    License\Range::since(
        License\Year::fromString(date('Y')),
        new \DateTimeZone('UTC')
    ),
    License\Holder::fromString('Dragonfly Development Inc'),
    License\Url::fromString('https://github.com/dflydev/dflydev-php-coding-standards')
);

$license->save();

use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Dflydev\PhpCsFixer\Config\RuleSet\Dflydev());

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

return $config;    