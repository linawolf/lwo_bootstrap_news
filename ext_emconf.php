<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'LWO Bootstrap news',
    "description"=> "Bootstrap Package compatible News Templates",
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'bootstrap_package' => '*'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'LWO\\LwoBootstrapNews\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lina Wolf',
    'author_email' => '112@linawolf.de',
    'author_company' => 'private',
    'version' => '11.0.0',
];
