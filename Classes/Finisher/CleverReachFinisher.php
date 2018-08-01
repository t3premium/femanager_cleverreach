<?php
namespace T3premium\FemanagerCleverreach\Finisher;

use In2code\Femanager\Domain\Model\User;
use In2code\Femanager\Finisher\AbstractFinisher;

/**
 * Class CleverReachFinisher
 *
 * @package T3premium\FemanagerCleverreach\Finisher
 */
class CleverReachFinisher extends AbstractFinisher
{

    /**
     * @var \T3premium\FemanagerCleverreach\CleverReach\Api
     * @inject
     */
    protected $api;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var array
     */
    protected $configuration;

    /**
     * CrFinisher
     *
     * @return void
     */
    public function crFinisher()
    {

        $receivers[] = array(
		    "attributes" => [
				"firstname"     => $this->user->getFirstName(),
				"lastname"      => $this->user->getLastName(),
			],
        	"global_attributes" => [
				"firstname"     => $this->user->getFirstName(),
				"lastname"      => $this->user->getLastName(),
			],
            "email"         => $this->user->getEmail(),
            "registered"    => strtotime("now"),
            "activated"     => strtotime("now"),
        );

        // Add new receiver to CleverReach
        $this->api->addReceiversToGroup($receivers,$groupId);
    }
}
