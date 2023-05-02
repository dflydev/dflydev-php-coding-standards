# Dragonfly PHP Coding Standards

### Usage

```bash
composer require dflydev/php-coding-standards
```

Create a new `.php-cs-fixer.dist.php` file and within it add the following:

```php
use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Dflydev\PhpCsFixer\Config\RuleSet\Dflydev());

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

return $config;
```

### Configuration with override rules

💡 Optionally override rules from a rule set by passing in an array of rules to be merged in:

```php
use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Dflydev\PhpCsFixer\Config\RuleSet\Dflydev(), [
    'mb_str_functions' => false,
    'strict_comparison' => false,
]);

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.php-cs-fixer.cache');

return $config;
```