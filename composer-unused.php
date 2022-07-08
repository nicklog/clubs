<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;
use ComposerUnused\ComposerUnused\Configuration\PatternFilter;
use Webmozart\Glob\Glob;

return static function (Configuration $config): Configuration {
    return $config
        ->addPatternFilter(PatternFilter::fromString('/symfony\/.*/'))
        ->addNamedFilter(NamedFilter::fromString('payum/offline'))
        ->addNamedFilter(NamedFilter::fromString('payum/paypal-express-checkout-nvp'))
        ->addNamedFilter(NamedFilter::fromString('moneyphp/money'))
        ->addNamedFilter(NamedFilter::fromString('phpseclib/bcmath_compat'))
        ->addNamedFilter(NamedFilter::fromString('nyholm/psr7'))
        ->addNamedFilter(NamedFilter::fromString('twig/markdown-extra'))
        ->addNamedFilter(NamedFilter::fromString('erusev/parsedown'))
        ->addNamedFilter(NamedFilter::fromString('beberlei/doctrineextensions'))
        ->setAdditionalFilesFor('nicklog/futdb', Glob::glob(__DIR__ . '/config/*.php'));
};
