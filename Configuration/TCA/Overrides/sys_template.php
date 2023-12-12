<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/***************
 * Default TypoScript
 */
ExtensionManagementUtility::addStaticFile(
    'femanager_cleverreach',
    'Configuration/TypoScript/',
    'femanager CleverReach'
);
