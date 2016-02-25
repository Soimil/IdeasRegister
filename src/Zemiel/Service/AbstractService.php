<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 9/2/15
 * Time: 10:26 PM
 */

namespace Zemiel\Service;

use Zemiel\Gateway\AbstractGateway;

abstract class AbstractService
{
    protected $currentGateway;
    protected $gateways = [];

    /**
     * construct
     * @param null|AbstractGateway $gateway
     */
    public function __construct(AbstractGateway $gateway = null)
    {
        if ($gateway && !(is_object($gateway))) {
            throw new \InvalidArgumentException('Gateway must by object');
        }
    }

    /**
     * setting current Gateway
     *
     * @param string $gatewayName
     * @return $this
     */
    public function setCurrentGateway($gatewayName)
    {
        if (!(is_string($gatewayName)) || preg_match('/\s/', $gatewayName) > 0 || strlen($gatewayName) === 0) {
            throw new \InvalidArgumentException('Gateway name can\'t by empty and must by string.');
        }

        if (!$this->gateways) {
            throw new \InvalidArgumentException('There is no set yet any gateways');
        }

        if (array_key_exists($gatewayName, $this->gateways)) {
            $this->currentGateway = $this->gateways[$gatewayName];
        }

        return $this;

    }

    /**
     * getting gateway
     *
     * @return null|object
     */
    public function getCurrentGateway()
    {
        return $this->currentGateway;
    }

    /**
     * adding Gateway object to gateways
     *
     * @param object|AbstractGateway $gateway
     * @return $this
     */
    public function addGateway(AbstractGateway $gateway)
    {
        $this->gateways[$gateway->getName()] = $gateway;

        return $this;
    }

}