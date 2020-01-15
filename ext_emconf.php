<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'femanager CleverReach',
    'description' => 'Adds CleverReach subscription to femanager',
    'category' => 'plugin',
    'author' => 'Samuel Heinz',
    'author_email' => 'samuel.heinz@t3premium.de',
    'author_company' => 'T3 Premium',
    'state' => 'beta',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'femanager' => '5.2.0',
        ],
    ],
];
