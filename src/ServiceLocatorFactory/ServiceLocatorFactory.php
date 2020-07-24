<?php

namespace ServiceLocatorFactory;

use ServiceLocatorFactory\NullServiceLocatorException;
use Laminas\ServiceManager\ServiceManager;

class ServiceLocatorFactory
{
    /**
     * @var ServiceManager
     */
    private static $serviceManager = null;
    
    /**
     * Disable constructor
     */
    private function __construct() { }
    
    /**
     * @throw ServiceLocatorFactory\NullServiceLocatorException
     * @return Laminas\ServiceManager\ServiceManager
     */
    public static function getInstance()
    {
        if(null === self::$serviceManager) {
            throw new NullServiceLocatorException('ServiceLocator is not set');
        }
        return self::$serviceManager;
    }

    /**
     * @param ServiceManager
     */
    public static function setInstance(ServiceManager $sm)
    {
        self::$serviceManager = $sm;
    }
}
