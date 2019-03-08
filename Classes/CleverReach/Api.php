<?php
namespace T3premium\FemanagerCleverreach\CleverReach;

use T3premium\FemanagerCleverreach\Tools\Rest;

class Api
{
    /**
     * @var \T3premium\FemanagerCleverreach\Service\ConfigurationService
     * @inject
     */
    protected $configurationService;

    /**
     * @var Rest
     */
    protected $rest;

    public function connect()
    {
        if ($this->rest !== null) {
            return;
        }

        $this->rest = new Rest($this->configurationService->getRestUrl());

        // Get CleverReach connection data of typoscript
        $token = $this->rest->post(
            '/login',
            [
                'client_id' => $this->configurationService->getClientId(),
                'login' => $this->configurationService->getClientLogin(),
                'password' => $this->configurationService->getClientPassword()
            ]
        );
        $this->rest->setAuthMode('bearer', $token);
    }

    /**
     * Adds new receiver CleverReach. Ignores, if already in list.
     *
     * @param array $receivers
     * @param int $groupId
     * @return mixed
     */
    public function addReceiversToGroup($receivers, $groupId = null)
    {
        // Connect to CleverReach REST API
        $this->connect();

        if ($groupId === null || $groupId === '') {
            $groupId = $this->configurationService->getGroupId();
        }

        $return = $this->rest->post(
            '/groups/' . $groupId . '/receivers',
            $receivers
        );
    }
}
