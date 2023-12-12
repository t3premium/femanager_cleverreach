<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'femanager CleverReach',
    'description' => 'Adds CleverReach subscription to femanager',
    'category' => 'plugin',
    'author' => 'Samuel Heinz',
    'author_email' => 'samuel.heinz@t3premium.de',
    'author_company' => 'T3 Premium',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'femanager' => '7.0.0',
        ],
    ],
];
