<?php
defined('TYPO3_MODE') or die();

/***************
 * Default TypoScript
 */
// @extensionScannerIgnoreLine
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'femanager_cleverreach',
    'Configuration/TypoScript/',
    'femanager CleverReach'
);
