<?php
namespace T3premium\FemanagerCleverreach\Service;

/**
 * Class ConfigurationService
 */
class ConfigurationService
{

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
     * @inject
     */
    protected $objectManager;

    public function getConfiguration()
    {
        /**
         * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
         * $configurationManager
         */
        $configurationManager = $this->objectManager->get('TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface');
        $settings = $configurationManager->getConfiguration(
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT,
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
