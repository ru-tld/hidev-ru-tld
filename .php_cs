<?php

$header = <<<EOF
RU-TLD vendor configuration for HiDev

@link      https://github.com/ru-tld/hidev-ru-tld
@package   hidev-ru-tld
@license   proprietary
@copyright Copyright (c) 2015-2017, RU-TLD (https://ru-tld.ru/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
