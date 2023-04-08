<?php 

use Dflydev\PhpCsFixer\DflyConfig;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__.'/src');

return (new DflyConfig)
    ->setFinder($finder)
    ->setUsingCache(false)
    ->setRiskyAllowed(true);