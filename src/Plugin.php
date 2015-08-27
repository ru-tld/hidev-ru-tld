<?php

/*
 * RU-TLD general hidev config
 *
 * @link      https://github.com/ru-tld/hidev-config
 * @package   hidev-config
 * @license   No license
 * @copyright Copyright (c) 2015, RU-TLD (https://ru-tld.ru/)
 */

namespace rutld\hidev\config;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@rutld/hidev/config/config.yml',
        ],
        'views' => [
            '@rutld/hidev/config/views',
        ],
    ];
}
