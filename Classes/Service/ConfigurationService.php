<?php

namespace T3premium\FemanagerCleverreach\Service;

use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

/**
 * Class ConfigurationService
 */
class ConfigurationService
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    public function injectObjectManager(ObjectManagerInterface $objectManager): void
    {
        $this->objectManager = $objectManager;
    }


    public function getConfiguration()
    {
        /**
         * @var ConfigurationManagerInterface
         * $configurationManager
         */
        $configurationManager = $this->objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface');
        $settings = $configurationManager->getConfiguration(
            ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT,
            'femanager'
        );
        return $settings['plugin.']['tx_femanager.']['settings.']['finishers.']['100.']['config.'];
    }

    /**
     * @return string
     */
    public function getRestUrl()
    {
        $config = $this->getConfiguration();
        return $config['restUrl'];
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        $config = $this->getConfiguration();
        return (int)$config['clientId'];
    }

    /**
     * @return string
     */
    public function getClientLogin()
    {
        $config = $this->getConfiguration();
        return $config['clientLogin'];
    }

    /**
     * @return string
     */
    public function getClientPassword()
    {
        $config = $this->getConfiguration();
        return $config['clientPassword'];
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        $config = $this->getConfiguration();
        return (int)$config['groupId'];
    }
}
