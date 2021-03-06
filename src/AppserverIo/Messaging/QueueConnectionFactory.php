<?php

/**
 * AppserverIo\Messaging\QueueConnectionFactory
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/messaging
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Messaging;

use AppserverIo\Properties\PropertiesInterface;

/**
 * A factory implementation for creating queue connections.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/messaging
 * @link      http://www.appserver.io
 */
class QueueConnectionFactory
{

    /**
     * Protected constructor to use class only in static context.
     */
    protected function __construct()
    {
    }

    /**
     * Returns the queue connection instance as singleton.
     *
     * @param string                                      $appName    Name of the webapp using this client connection
     * @param \AppserverIo\Properties\PropertiesInterface $properties The properties containing the connection parameters
     *
     * @return \AppserverIo\Messaging\QueueConnection The singleton instance
     */
    public static function createQueueConnection($appName = '', PropertiesInterface $properties = null)
    {
        return new QueueConnection($appName, $properties);
    }
}
